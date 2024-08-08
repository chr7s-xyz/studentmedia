<?php 

include($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/session.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/function.php');
if(isset($_SESSION['userID'])){
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studentmedia - LOGIN</title>

    <link rel="stylesheet" href="../css/styleLogin.css">

    <!-- linking google icons & fonts-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
</head>

<body>
    <div id="login-section">
        <div id="login-div">
            <div id="heading-section"> SSFM / LOGIN</div>
            <div id="login-main">
                <form action="../php/form.php?login" method="post">

                    <div id="user-div">
                        <span class="material-symbols-outlined span" id="color-icon">account_circle</span>
                        <input type="text" id="name" class="login-input" name="name" autocomplete="off" required
                            placeholder="username/email" />
                    </div>
                    <div id="password-div">
                        <span class="material-symbols-outlined span" id="color-icon">lock</span>

                        <input type="password" id="password" class="login-input" name="password" autocomplete="off"
                            required placeholder="password" />
                        <div onclick="togglePassword()"> <span class="material-symbols-outlined span color-icon-pwd"
                                id="color-icon">visibility</span></div>

                    </div>

                    <div id="submit-div">
                        <div id="login-submit"><input type="submit" class="submitUser" value="Login"
                                name="submitUserForm" /></div>
                    </div>

                    <!-- error show -->
                    <div id="error-login" class="error-div-login" style="display:<?php
                    if (isset($_SESSION['msg']))
                        echo "flex; z-index:10;";
                    else
                        echo "none;z-index:-1;";
                    ;
                    ?>">
                        <?php echo $_SESSION['msg'] ?>
                    </div>

                    <div class="redirect-login">
                        Dont have an account? <a href="./register.php">Register here</a> ....
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="../js/index.js"></script>
</body>

</html>