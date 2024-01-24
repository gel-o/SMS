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
    <link rel="stylesheet" href="css/Student_Dash.css">
    <title>djprshs</title>
</head>

<body>

    <!-- bg -->
    <div class='box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>

    <!--WELCOME (STUDENT NAME) TEXT-->
    <div class="stu_portal">
        <i class="fa-solid fa-school"
            style="font-size: 25px; position: relative; top: -1em; right: 130px; color: white;"></i>
        <h2 style="font-weight: bold; position: absolute; right: 2em; top: -1em; font-size: 140%; color: white;">
            Welcome, <?php echo $user['firstName'];?>!</h2>
        <div class="linerist6"></div>
        <h4 style="font-size: 80%; position: relative; right: 2em; top: -2em; color: white;">Last Login: November 22,
            2023 10:35:20am
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
                    <h3 style="font-size: larger; position: relative; left: 38px; top: -12%; font-weight: bold;">3rd
                        Quarter</h3>
                    <div class="linerist3"></div>
                    <h4 style="font-size: small;">Current Quarter</h4>

                    <i class="fa-regular fa-circle-check"
                        style="position: relative; font-size: 25px; top: 0em; right: -5px;"></i>
                    <h3 style="font-size: larger; position: relative; left: 38px; top: -12%; font-weight: bold;">
                        Enrolled
                    </h3>
                    <div class="linerist4"></div>
                    <h4 style="font-size: small;">Status</h4>

                    <i class="fa-solid fa-graduation-cap"
                        style="position: relative; font-size: 25px; top: 0em; right: -5px;"></i>
                    <h3 style="font-size: larger; position: relative; left: 38px; top: -12%; font-weight: bold;">Gr. 12
                        -
                        ICT/CSS</h3>
                    <div class="linerist5"></div>
                    <h4 style="font-size: small;">Strand and Year Level</h4>
                </div>
            </div>
        </div>
    </div>

    <!--NEWS AND UPDATES CONTAINER-->
    <div class="container-form-right" style="right: 18%;">
        <!-- Second container on the right side -->
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <i class="fa-regular fa-newspaper"
                        style="position: relative; top: -42px; font-size: 25px; left: 3px;"></i>
                    <h3 style="font-size: larger; position: relative; left: 38px; top: -67px;">News and Updates</h3>
                    <div class="linerist"></div>
                    <!-- Placeholder News -->
                    <div class="news">
                        <div class="news-item">
                            <h5 style="position: relative; font-size: 98%; font-weight: bold;">Important Announcement
                            </h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <div class="news-item">
                            <h5 style="position: relative; font-size: 98%; font-weight: bold;">3rd Quarterly Exam
                                Schedule</h5>
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--MENU CONTAINER-->
    <div class="menu-container" style="position: relative;">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <!-- PROFILE CONTAINER -->
                    <a href="Profile.php">
                        <div class="profile-container" id="profbutton">
                            <i class="fa-solid fa-user"></i>
                            <h4>Profile</h4>
                        </div>
                    </a>
                    <!--CLASS ANNOUNCEMENTS-->
                    <a href="Announcements.html">
                        <div class="announcements-container">
                            <i class="fa-solid fa-bell"></i>
                            <h4>Class Announcements</h4>
                        </div>
                    </a>
                    <!-- ENROLLED SUBJECTS -->
                    <a href="Enrolled_Subjects.html">
                        <div class="enrolledsub-container">
                            <i class="fa-solid fa-book"></i>
                            <h4>Enrolled Subjects</h4>
                        </div>
                    </a>
                    <!-- GRADES-->
                    <a href="Grades.html">
                        <div class="grades-container">
                            <i class="fa-solid fa-chart-column"></i>
                            <h4>Grades</h4>
                        </div>
                    </a>
                    <!-- CURRICULUM-->
                    <a href="Curriculum_Checklist.html">
                        <div class="checklist-container">
                            <i class="fa-solid fa-list-check"></i>
                            <h4>Curriculum Checklist</h4>
                        </div>
                    </a>
                    <!-- PREFERENCES -->
                    <div class="pref-container" id="prefContainer">
                        <i class="fa-solid fa-user-gear"></i>
                        <h4>Preferences</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PREFERENCES MODAL -->
    <div class="modal" id="darkModeModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Preferences</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body" style="height: 100vh;">
                    <label for="darkModeToggle" style="top: 40%; position: absolute;">Dark Mode:</label>
                    <input type="checkbox" id="darkModeToggle" style="position: absolute; left: 21%; top: 46%;">
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="changePasswordBtn"
                        style="position: absolute; left: 2%; top: 79%;">Change Password</button>
                    <button type="button" class="btn btn-primary" id="saveChangesBtn" data-dismiss="modal"
                        style="position: relative; top: -12px;">Save Changes</button>
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
                        style="position: absolute; top: 78%;">Save
                        Password</button>
                </div>

            </div>
        </div>
    </div>

    <!--SCHOOL LOGO-->
    <a href="Student_Dash.php">
        <img src="img/school_logo.png" alt="Logo"
            style="position: absolute; top: 20px; left: 20px; width: 65px; height: auto; z-index: 2;">
    </a>
    <!-- DARK MODE JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#changePasswordBtn').click(function () {
                $('#darkModeModal').modal('hide'); // Hide Preferences modal
                $('#changePasswordModal').modal('show'); // Show Change Password modal
            });

            $('#changePasswordModal').on('hidden.bs.modal', function () {
                $('#darkModeModal').modal('show'); // Show Preferences modal when Change Password modal is closed
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
                $('#darkModeModal').modal('show'); // Show the modal on button click
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
                        $('.container-form, .container-form-right, .menu-container').fadeTo(function () {
                            $(this).css('background-color', '#5d5555').fadeIn(); // Fade in container background color change
                        });
                        $('.stu_portal h2, .stu_portal h4').fadeTo(function () {
                            $(this).css('color', 'white').fadeIn(); // Fade in text color change
                        });
                        $('.fa-solid.fa-school').fadeTo(function () {
                            $(this).css('color', 'white').fadeIn(); // Fade in icon color change
                        });
                        $('#darkModeModal .modal-content').fadeTo(function () {
                            $(this).css('background-color', '#5d5555').fadeIn(); // Fade in modal background color change
                        });
                        $('.profile-container').fadeTo(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in profile container color change
                        });
                        $('.announcements-container').fadeTo(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in announcements container color change
                        });
                        $('.enrolledsub-container').fadeTo(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in enrolledsubs container color change
                        });
                        $('.grades-container').fadeTo(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.checklist-container').fadeTo(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.pref-container').fadeTo(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist').fadeTo(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist2').fadeTo(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist3').fadeTo(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist4').fadeTo(function () {
                            $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                        });
                        $('.linerist5').fadeTo(function () {
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
                        $('.container-form, .container-form-right, .menu-container').fadeTo(function () {
                            $(this).css('background-color', 'white').fadeIn(); // Fade in container background color change
                        });
                        $('.stu_portal h2, .stu_portal h4').fadeTo(function () {
                            $(this).css('color', 'white').fadeIn(); // Fade in text color change
                        });
                        $('.fa-solid.fa-school').fadeTo(function () {
                            $(this).css('color', 'white').fadeIn(); // Fade in icon color change
                        });
                        $('#darkModeModal .modal-content').fadeTo(function () {
                            $(this).css('background-color', 'white').fadeIn(); // Fade in modal background color change
                        });
                        $('.profile-container').fadeTo(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in profile container color change
                        });
                        $('.announcements-container').fadeTo(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in announcements container color change
                        });
                        $('.enrolledsub-container').fadeTo(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in enrolledsubs container color change
                        });
                        $('.grades-container').fadeTo(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                        });
                        $('.checklist-container').fadeTo(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in checklist container color change
                        });
                        $('.pref-container').fadeTo(function () {
                            $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in pref container color change
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
                $('.container-form, .container-form-right, .menu-container').fadeTo(function () {
                    $(this).css('background-color', '#5d5555').fadeIn(); // Fade in container background color change
                });
                $('.stu_portal h2, .stu_portal h4').fadeTo(function () {
                    $(this).css('color', 'white').fadeIn(); // Fade in text color change
                });
                $('.fa-solid.fa-school').fadeTo(function () {
                    $(this).css('color', 'white').fadeIn(); // Fade in icon color change
                });
                $('#darkModeModal .modal-content').fadeTo(function () {
                    $(this).css('background-color', '#5d5555').fadeIn(); // Fade in modal background color change
                });
                $('.profile-container').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in profile container color change
                });
                $('.announcements-container').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in announcements container color change
                });
                $('.enrolledsub-container').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in enrolledsubs container color change
                });
                $('.grades-container').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                });
                $('.checklist-container').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                });
                $('.pref-container').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                });
                $('.linerist').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                });
                $('.linerist2').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                });
                $('.linerist3').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                });
                $('.linerist4').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                });
                $('.linerist5').fadeTo(function () {
                    $(this).css('background-color', '#8BBDF5').fadeIn(); // Fade in grades container color change
                });
                $('.linerist6').fadeTo(function () {
                    $(this).css('background-color', 'white').fadeIn(); // Fade in grades container color change
                });
            } else {
                $('body').removeClass('dark-mode');
                $('.container-form, .container-form-right, .menu-container').fadeTo(function () {
                    $(this).css('background-color', 'white').fadeIn(); // Fade in container background color change
                });
                $('.stu_portal h2, .stu_portal h4').fadeTo(function () {
                    $(this).css('color', 'white').fadeIn(); // Fade in text color change
                });
                $('.fa-solid.fa-school').fadeTo(function () {
                    $(this).css('color', 'white').fadeIn(); // Fade in icon color change
                });
                $('#darkModeModal .modal-content').fadeTo(function () {
                    $(this).css('background-color', 'white').fadeIn(); // Fade in modal background color change
                });
                $('.profile-container').fadeTo(function () {
                    $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in profile container color change
                });
                $('.announcements-container').fadeTo(function () {
                    $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in announcements container color change
                });
                $('.enrolledsub-container').fadeTo(function () {
                    $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in enrolledsubs container color change
                });
                $('.grades-container').fadeTo(function () {
                    $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in grades container color change
                });
                $('.checklist-container').fadeTo(function () {
                    $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in checklist container color change
                });
                $('.pref-container').fadeTo(function () {
                    $(this).css('background-color', '#0A4D98').fadeIn(); // Fade in pref container color change
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

                // Reset the flag after changes are applied
                isDarkModeToggled = false;
            }

            // Save the dark mode state even if it's turned off
            if (isDarkModeToggled) {
                saveDarkModeState($('#darkModeToggle').is(':checked')); // Save the state
                isDarkModeToggled = false; // Reset the toggle flag
            }


        });

    </script>
</body>

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