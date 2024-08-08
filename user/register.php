<?php

include($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/session.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/function.php');
if(isset($_SESSION['userID'])){
    header("Location: ../index.php");
}
// if(empty($_SESSION["msg"])){
//     $_SESSION["msg"]="no";
// }
registerForm();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentmedia - REGISTER</title>

    <link rel="stylesheet" href="../css/styleRegister.css">

    <!-- linking google icons & fonts-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
</head>

<body>
  
<!-- to show error after form submission -->
 <div id="error" class="error-div" style="display:<?php
 if(isset($_SESSION['msg'])) echo "flex; z-index:10;"; else echo "none;z-index:-1;";;
 ?>">
    <div id="main-error">
        <div class="content">
            <div class="content-row1">ERROR | REGISTER FORM                <div id="closePopup" onclick="popupClose()">X</div></div>
            <div class="content-row2"><?php echo $_SESSION["msg"] ?></div>
        </div>
    </div>
 </div>

    
    <div id="register-section">
        <div id="register-div">

            <div id="register-form-title">
                <h1>CREATE ACCOUNT | SSFM</h1>
            </div>
            <div id="register-form">
                <div id="register-form-data">
                    <form action="../php/form.php?register" method="post" enctype="multipart/form-data">
                        <div id="form-div1">
                            <div class="name-div register-div">
                                <span class="material-symbols-outlined span" id="color-icon">image</span>
                                <input type="text" id="name" class="register-input" name="name" autocomplete="off"
                                    required placeholder="name" />
                                <div id="status-name"></div>
                            </div>

                            <div class="username-div register-div">
                                <span class="material-symbols-outlined span" id="color-icon">account_circle</span>
                                <input type="text" id="username" class="register-input" name="username"
                                    autocomplete="off" required placeholder="username" />
                                <div id="status-username">

                                </div>
                            </div>

                            <div class="email-div register-div">
                                <span class="material-symbols-outlined span" id="color-icon">mail</span>
                                <input type="email" id="email" class="register-input" name="email" autocomplete="off"
                                    required placeholder="email" />
                            </div>


                            <div class="password-div register-div">
                                <span class="material-symbols-outlined span" id="color-icon">lock</span>
                                <div class="password-inside">
                                    <input type="password" id="password" class="register-input" name="password"
                                        autocomplete="off" required placeholder="password" />
                                    <div onclick="togglePassword()"> <span
                                            class="material-symbols-outlined span color-icon-pwd"
                                            id="color-icon">visibility</span></div>
                                </div>
                            </div>

                            <div class="confirmPassword-div register-div">
                                <span class="material-symbols-outlined span" id="color-icon">lock_reset</span>
                                <div class="password-inside">
                                    <input type="password" id="confirmPassword" class="register-input"
                                        name="confirmPassword" required placeholder="confirm password" />
                                    <div onclick="togglePassword2()"> <span
                                            class="material-symbols-outlined span color-icon-pwd"
                                            id="color-icon">visibility</span></div>
                                </div>
                            </div>
                        </div>

                        <div id="form-div2">


                            <div class="college-div register-div">
                                <span class="material-symbols-outlined span" id="color-icon">travel_explore</span>
                                <input type="text" id="college" class="register-input" name="college" autocomplete="off"
                                    required placeholder="college" />
                            </div>

                            <div class="course-div register-div">
                                <span class="material-symbols-outlined span" id="color-icon">workspace_premium</span>
                                <input type="text" id="course" class="register-input" name="course" autocomplete="off"
                                    required placeholder="course" />
                            </div>



                            <div class="idcard-div register-div">
                                <span class="material-symbols-outlined span" id="color-icon">photo_camera_front</span>
                                <div class="idcard-inside">
                                    <input type="file" id="idcard" class="product-input input-image" name="idcard"
                                        required />
                                    <div class="">College Id</div>
                                </div>

                            </div>


                            <div id="action-div">
                                <div class="action-inputs">
                                    <div id="register-submit"><input type="submit" class="submitUser"
                                            value="Create User" name="submitUserForm" /></div>

                                    <div id="register-reset"><input type="reset" class="resetUser" value="Reset"
                                            name="resetForm" /></div>
                                </div>

                                <div class="redirect-login">
                                    Already have an account? <a href="./login.php">Login here</a> ....
                                </div>
                            </div>

                        </div>
                </div>



                </form>
            </div>
        </div>
    </div>
    </div>


    <script src="../js/index.js"></script>

</body>

</html>