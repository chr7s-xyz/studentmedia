<?php
include($_SERVER['DOCUMENT_ROOT'].'/studentmedia/php/function.php');
registerForm();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentmedia - REGISTER</title>
    <link rel="stylesheet" href="../css/styleRegister.css">
</head>

<body>
    <div id="register-section">
        <div id="register-div">
            <div id="register-photo">
                <img src="../assets/images/register.png" alt="happy" />
            </div>
            <div id="register-form">
                <div id="register-form-title">REGISTER</div>
                <div id="register-form-data">
                    <form action="../php/form.php?register" method="post" enctype="multipart/form-data">
                        <div class="username-div register-div">
                            <label for="username" class="register-label">Enter your Username :</label>
                            <input type="text" id="username" class="register-input" name="username" autocomplete="off"
                                required value="<?php ?>"/>
                        </div>

                        <div class="name-div register-div">
                            <label for="name" class="register-label">Enter your Name :</label>
                            <input type="text" id="name" class="register-input" name="name" autocomplete="off"
                                required />
                        </div>

                        <div class="college-div register-div">
                            <label for="college" class="register-label">College :</label>
                            <input type="text" id="college" class="register-input" name="college" autocomplete="off"
                                required />
                        </div>

                        <div class="course-div register-div">
                            <label for="course" class="register-label">Course :</label>
                            <input type="text" id="username" class="register-input" name="course" autocomplete="off"
                                required />
                        </div>

                        <div class="email-div register-div">
                            <label for="email" class="register-label">Email :</label>
                            <input type="text" id="email" class="register-input" name="email" autocomplete="off"
                                required />
                        </div>

                        <div class="idcard-div register-div">
        <label for="idcard" class="product-label">College ID :</label>
        <input type="file" id="idcard" class="product-input input-image" name="idcard" />
    </div>

                        <div class="password-div register-div">
                            <label for="password" class="register-label p-label">Password :</label>
                            <div>
                                <input type="password" id="password" class="register-input" name="password"
                                    autocomplete="off" required />
                                <div onclick="togglePassword()"> <i class="fa-solid fa-2xl fa-eye"></i></div>
                            </div>
                        </div>

                        <div class="confirmPassword-div register-div">
                            <label for="confirmPassword" class="register-label p-label">Confirm Password :</label>
                            <div>
                                <input type="password" id="confirmPassword" class="register-input"
                                    name="confirmPassword" required />
                                <div onclick="togglePassword2()"> <i class="fa-solid fa-2xl fa-eye"></i></div>
                            </div>
                        </div>


                        <div id="register-submit"><input type="submit" class="submitUser" value="Create User"
                                name="submitUserForm" /></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="../js/index.js"></script>
</body>

</html>