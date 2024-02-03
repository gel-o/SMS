<?php
session_start();
// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: Portal_Login.php"); // Redirect to the login page if not logged in
    exit();
}
// Database connection
include_once("connections/connection.php");
$con = connection();

// Retrieve user information
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    // Handle the case where the user is not found
    echo "User not found.";
    exit();
}

$con->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-... (the integrity hash)" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="css/Teacher_Dash.css">
    <style>
        #calendar-container {
            position: absolute;
            max-width: 25%;
            /* Adjust the width as needed */
            margin: 0 auto;
            /* Center the container horizontally */
            left: 54%;
            top: 48%;
        }

        #calendar {
            position: absolute;
            width: 100%;
            height: 300px;
            /* Adjust the height as per your preference */
            max-width: 100%;
            /* Ensure the calendar is responsive within its container */
            margin: 0 auto;
            /* Center the calendar within its container */
        }

        #white-container {
            position: absolute;
            left: -8%;
            top: -1em;
            border-radius: 15px;
            width: 122%;
            height: 430px;
            /* Match the height of the calendar */
            background-color: white;
            /* Set the background color to white */
            z-index: 0;
            /* Move the white container behind the calendar */
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .fc-toolbar h2 {
            position: absolute;
            top: 2%;
            font-size: 130%;
        }

        .fc-toolbar h2,
        .fc-day-number {
            color: #0A4D98;
        }

        .fc-day-header {
            background-color: #0A4D98;
            color: white;
        }
    </style>
    <title>djprshs</title>
</head>

<body>

    <!--SCHOOL LOGO-->
    <a href="Teacher_Dash.html">
        <img src="img/school_logo.png" alt="Logo"
            style="position: absolute; top: 20px; left: 20px; width: 65px; height: auto; z-index: 2;">
    </a>

    <!-- bg -->
    <div class='box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>



    <!--WELCOME (Ma'am/Sir Teacher Name) TEXT-->
    <div class="prof_portal">
        <i class="fa-solid fa-school"
            style="font-size: 25px; position: absolute; top: -1em; right: 270px; color: white;"></i>
        <h2 style="font-weight: bold; position: relative; left: 1em; top: -1em; font-size: 140%; color: white;">
            Welcome, Teacher <?php echo $user['firstName'];?>!</h2>
        <div class="linerist6"></div>
        <h4 style="font-size: 80%; position: relative; right: 2em; top: -2em; color: white;">Last Login: November 22,
            2023 10:35:20
            am</h4>

    </div>

    <!-- LOGOUT BUTTON -->
    <a href="#" id="logoutBtn" style="position: absolute; top: 20px; right: 20px; color: white; text-decoration: none;">
        <i class="fa-solid fa-power-off" style="font-size: 25px;"></i>
    </a>

    <!-- LOGOUT CONFIRMATION MODAL -->
    <div class="modal" id="logoutConfirmModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Logout Confirmation</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        style="position: absolute; left: 65%;">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmLogoutBtn">Logout</button>
                </div>

            </div>
        </div>
    </div>

    <!-- DETAILS CONTAINER -->
    <div class="container-form">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <i class="fa-regular fa-calendar-days"
                        style="position: relative; font-size: 25px; top: -43px; right: -5px;"></i>
                    <h3 style="font-size: larger; position: relative; left: 38px; top: -67px; font-weight: bold;">
                        Academic Year 2023-2024</h3>
                    <div class="linerist2"></div>
                    <h4 style="font-size: small;">Current Academic Year</h4>

                    <i class="fa-solid fa-list" style="position: relative; font-size: 25px; top: 0em; right: -5px;"></i>
                    <h3 style="font-size: larger; position: relative; left: 38px; top: -18%; font-weight: bold;">3rd
                        Quarter</h3>
                    <div class="linerist3"></div>
                    <h4 style="font-size: small;">Current Semester</h4>

                    <i class="fa-solid fa-graduation-cap"
                        style="position: relative; font-size: 25px; top: 0em; right: -5px;"></i>
                    <h3 style="font-size: larger; position: relative; left: 38px; top: -18%; font-weight: bold;">Gr.11 -
                        Gulapa</h3>
                    <div class="linerist5"></div>
                    <h4 style="font-size: small;">Advisory Class</h4>
                </div>
            </div>
        </div>
    </div>

    <!--MEMO AND ANNOUNCEMENT -->
    <div class="container-form-right" style="right: 18%;">
        <!-- Second container on the right side -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="memocont">
                        <!-- PROFILE CONTAINER -->
                        <a href="Memo_Teacher.html">
                            <div class="membutton" id="membutton">
                                <i class="fa-solid fa-note-sticky"></i>
                                <h4>Memo</h4>
                            </div>
                        </a>

                        <a href="Add_Announcements.html">
                            <div class="annbutton" id="annbutton">
                                <i class="fa-solid fa-bell"></i>
                                <h4>Add</h4>
                                <h4 style="position: absolute; top: 70%; left: -5%;">Announcements</h4>
                            </div>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--MENU CONTAINER-->
    <div class="menucont">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <a href="Teacher_Profile.php">
                        <div class="profcont" id="profbutton">
                            <i class="fa-solid fa-user"></i>
                            <h4>Profile</h4>
                        </div>
                    </a>

                    <a href="Subjects_Handled.html">
                        <div class="subhandlecont">
                            <i class="fa-solid fa-book"></i>
                            <h4>Subjects Handled</h4>
                        </div>
                    </a>

                    <a href="Student_List.html">
                        <div class="gradescont" id="gradescont">
                            <i class="fa-solid fa-chart-column"></i>
                            <h4>Grades</h4>
                        </div>
                    </a>

                    <div class="prefcont" id="prefcont" data-toggle="modal" data-target="#preferencesModal">
                        <i class="fa-solid fa-user-gear"></i>
                        <h4>Preferences</h4>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container" id="calendar-container">
        <div id="white-container"></div>
        <div id="calendar"></div>
    </div>
    <br>

    <!-- Preferences Modal -->
    <div class="modal fade" id="preferencesModal" tabindex="-1" role="dialog" aria-labelledby="preferencesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Preferences</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body" style="height: 5em;">
                    <label for="darkModeToggle" style="top: 40%; position: absolute;">Dark Mode:</label>
                    <input type="checkbox" id="darkModeToggle" style="position: absolute; left: 21%; top: 46%;">
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="changePasswordBtn"
                        style="position: absolute; left: 2%; top: 74%;">Change Password</button>
                    <button type="button" class="btn btn-primary" id="saveChangesBtn" data-dismiss="modal">Save
                        Changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- CHANGE PASSWORD MODAL -->
    <div class="modal" id="changePasswordModal" style="max-height: 60%;">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Change Password</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <div>
                        <label for="currentPassword">Enter current password:</label>
                        <input type="password" id="currentPassword" style="left: 40%; position: absolute;">
                    </div>
                    <div>
                        <label for="newPassword">Enter new password:</label>
                        <input type="password" id="newPassword" style="left: 40%; position: absolute;">
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="savePasswordBtn" data-dismiss="modal"
                        style="position: relative; top: 78%;">Save
                        Password</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Announcement Modal -->
    <div class="modal fade" id="announcementModal" tabindex="-1" role="dialog" aria-labelledby="announcementModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="announcementModalLabel">Announcement</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="announcementModalBody">
                    <!-- Announcement content will be dynamically inserted here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>

<script>
    function updateFullCalendar(eventsArray) {
        if ($('#calendar').fullCalendar) {
            // Clear existing events
            $('#calendar').fullCalendar('removeEvents');

            // Parse the date using moment
            eventsArray.forEach(function (event) {
                event.start = moment(event.start).toDate();
            });

            // Render events from the array
            $('#calendar').fullCalendar('renderEvents', eventsArray, true);
        } else {
            console.error('FullCalendar not initialized.');
        }
    }

    $(document).ready(function () {
        $('#calendar').fullCalendar({
            // your FullCalendar options here
            eventClick: function (event) {
                var announcementText = event.extendedProps.announcementText;
                if (!announcementText) {
                    announcementText = window.localStorage.getItem('lastAnnouncementText');
                }
                $('#announcementModalBody').html('<p>' + announcementText + '</p>');
                $('#announcementModal').modal('show');
            },
            viewRender: function (view, element) {
                // Get the currently displayed date
                var currentDate = $('#calendar').fullCalendar('getDate');

                // Load events from localStorage
                var storedEvents = localStorage.getItem('eventsArray');
                if (storedEvents) {
                    var eventsArray = JSON.parse(storedEvents);
                    updateFullCalendar(eventsArray);
                }
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        $('#changePasswordBtn').click(function () {
            $('#preferencesModal').modal('hide'); // Hide Preferences modal
            $('#changePasswordModal').modal('show'); // Show Change Password modal
        });

        $('#changePasswordModal').on('hidden.bs.modal', function () {
            $('#preferencesModal').modal('show'); // Show Preferences modal when Change Password modal is closed
        });

        $('#savePasswordBtn').click(function () {
            // Add logic here to save the new password
            let currentPassword = $('#currentPassword').val();
            let newPassword = $('#newPassword').val();

            // Logic to update password goes here
            console.log("Current Password:", currentPassword);
            console.log("New Password:", newPassword);

            // Close the Change Password modal after saving
            $('#changePasswordModal').modal('hide');
        });
    });
</script>

<script>
    $(document).ready(function () {
        let isDarkModeToggled = false;
        const storedDarkMode = localStorage.getItem('darkMode');

        // Event listener for the Preferences button
        $('.pref-container').on('click', function () {
            $('#preferencesModal').modal('show'); // Show the modal on button click
        });

        // Function to save dark mode state to localStorage
        function saveDarkModeState(isDarkModeOn) {
            localStorage.setItem('darkMode', isDarkModeOn);
        }

        // Event listener for the dark mode toggle
        $('#darkModeToggle').change(function () {
            isDarkModeToggled = true;
            saveDarkModeState($('#darkModeToggle').is(':checked')); // Save state to localStorage
        });

        // Dark mode toggle functionality
        $('#darkModeToggle').change(function () {
            isDarkModeToggled = true; // Update the flag when dark mode is toggled
            saveDarkModeState($('#darkModeToggle').is(':checked')); // Save state to localStorage
        });

        // Save Changes button click
        $('#saveChangesBtn').click(function () {
            if (isDarkModeToggled) {
                // Apply changes only if dark mode is toggled
                if ($('#darkModeToggle').is(':checked')) {
                    $('body').addClass('dark-mode');
                    $('.fa-solid.fa-school').fadeTo(function () {
                        $(this).css('color', 'white').fadeIn(); // Fade in icon color change
                    });
                    $('.container-form h3, .container-form h4, .container-form i').fadeTo(function () {
                        $(this).css('color', 'black').fadeIn(); // Fade in icon color change
                    });
                    $('#preferencesModal .modal-content').fadeTo(function () {
                        $(this).css('background-color', '#5d5555').fadeIn(); // Fade in modal background color change
                    });
                    $('.logout-modal .modal-content').fadeTo(function () {
                        $(this).css('background-color', '#5d5555').fadeIn(); // Fade in modal background color change
                    });
                    $('.linerist').fadeTo(function () {
                        $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                    });
                    $('.linerist4').fadeTo(function () {
                        $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                    });
                    $('.linerist6').fadeTo(function () {
                        $(this).css('background-color', 'white').fadeIn(); // Fade in grades container color change
                    });
                } else {
                    $('body').removeClass('dark-mode');
                    $('rect').fadeTo(function () {
                        $(this).css('fill', 'white').fadeIn(); // Fade in the color change
                    });
                    $('.fa-solid.fa-school').fadeTo(function () {
                        $(this).css('color', 'white').fadeIn(); // Fade in icon color change
                    });
                    $('.container-form h3, .container-form h4, .container-form i').fadeTo(function () {
                        $(this).css('color', 'black').fadeIn(); // Fade in icon color change
                    });
                    $('#preferencesModal .modal-content').fadeTo(function () {
                        $(this).css('background-color', 'white').fadeIn(); // Fade in modal background color change
                    });
                    $('.profcont').fadeTo(function () {
                        $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in profile container color change
                    });
                    $('.subhandlecont').fadeTo(function () {
                        $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in announcements container color change
                    });
                    $('.gradescont').fadeTo(function () {
                        $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in enrolledsubs container color change
                    });
                    $('.prefcont').fadeTo(function () {
                        $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                    });
                    $('.membutton').fadeTo(function () {
                        $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                    });
                    $('.annbutton').fadeTo(function () {
                        $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                    });

                    $('.linerist').fadeTo(function () {
                        $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                    });
                    $('.linerist2').fadeTo(function () {
                        $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                    });
                    $('.linerist3').fadeTo(function () {
                        $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                    });
                    $('.linerist4').fadeTo(function () {
                        $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                    });
                    $('.linerist5').fadeTo(function () {
                        $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                    });
                    $('.linerist6').fadeTo(function () {
                        $(this).css('background-color', 'white').fadeIn(); // Fade in grades container color change
                    });
                }
                // Reset the flag after changes are applied
                isDarkModeToggled = false;
            }
        });

        // Modal close event listener
        $('#darkModeModal').on('hide.bs.modal', function (e) {
            if (isDarkModeToggled) {
                if (!confirm('Changes are not saved. Do you want to discard changes?')) {
                    e.preventDefault(); // Prevent modal from closing
                } else {
                    isDarkModeToggled = false; // Reset the flag
                    $('#darkModeToggle').prop('checked', false); // Uncheck the toggle
                }
            }
        });

        // Apply dark mode if it was previously set
        if (storedDarkMode === 'true') {
            // Apply your dark mode changes similar to the ones within your toggle function
            // For example:
            $('body').addClass('dark-mode');

            $('.fa-solid.fa-school').fadeOut(function () {
                $(this).css('color', 'white').fadeIn(); // Fade in icon color change
            });
            $('.container-form h3, .container-form h4, .container-form i').fadeTo(function () {
                $(this).css('color', 'black').fadeIn(); // Fade in icon color change
            });
            $('#preferencesModal .modal-content').fadeOut(function () {
                $(this).css('background-color', '#5d5555').fadeIn(); // Fade in modal background color change
            });
            $('.profcont').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in profile container color change
            });
            $('.subhandlecont').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in announcements container color change
            });
            $('.gradescont').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in enrolledsubs container color change
            });
            $('.prefcont').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
            });
            $('.membutton').fadeTo(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
            });
            $('.annbutton').fadeTo(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
            });
            $('.linerist').fadeOut(function () {
                $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
            });
            $('.linerist4').fadeOut(function () {
                $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
            });
            $('.linerist6').fadeOut(function () {
                $(this).css('background-color', 'white').fadeIn(); // Fade in grades container color change
            });
        } else {
            $('body').removeClass('dark-mode');
            $('.fa-solid.fa-school').fadeOut(function () {
                $(this).css('color', 'white').fadeIn(); // Fade in icon color change
            });
            $('#preferencesModal .modal-content').fadeOut(function () {
                $(this).css('background-color', 'white').fadeIn(); // Fade in modal background color change
            });
            $('.container-form h3, .container-form h4, .container-form i').fadeTo(function () {
                $(this).css('color', 'black').fadeIn(); // Fade in icon color change
            });
            $('.profcont').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in profile container color change
            });
            $('.subhandlecont').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in announcements container color change
            });
            $('.gradescont').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in enrolledsubs container color change
            });
            $('.prefcont').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
            });
            $('.membutton').fadeTo(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
            });
            $('.annbutton').fadeTo(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
            });
            $('.linerist').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
            });
            $('.linerist2').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
            });
            $('.linerist3').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
            });
            $('.linerist4').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
            });
            $('.linerist5').fadeOut(function () {
                $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
            });
            $('.linerist6').fadeOut(function () {
                $(this).css('background-color', 'white').fadeIn(); // Fade in grades container color change
            });

            // Reset the flag after changes are applied
            isDarkModeToggled = false;
        }

    });

</script>

<!-- LOGOUT FUNCTION -->
<script>
    $(document).ready(function () {
        // Logout button click event
        $('#logoutBtn').click(function (e) {
            // Prevent the default action of the anchor tag
            e.preventDefault();
            // Show the logout confirmation modal
            $('#logoutConfirmModal').modal('show');
        });

        // Confirm Logout button click event
        $('#confirmLogoutBtn').click(function () {
            // Add logic to perform logout actions (e.g., redirect to login page, clear session, etc.)
            // For demonstration purposes, let's assume redirecting to the login page:
            window.location.href = 'Portal_Login.php';
        });
    });
</script>

</html>