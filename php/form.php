<?php
include($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/session.php');
include ($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/function.php');
global $conn;


// handling register form data
if (isset($_GET['register'])) {
 
    // inserting form data into db
    $registerFormData = registerForm();
    if ($registerFormData[7] == "valid") {
        $username = $registerFormData[0];
        $email = $registerFormData[1];
        $name = $registerFormData[2];
        $college = $registerFormData[3];
        $course = $registerFormData[4];
        $hashedPassword = $registerFormData[5];
        $collegeID = $registerFormData[6];

        $insertStmt = $conn->prepare("insert into user (name,username,email,college,course,password,collegeID,verified) values (?,?,?,?,?,?,?,0)");
        $insertStmt->bind_param("sssisss", $name, $username, $email, $college, $course, $hashedPassword, $collegeID);
        $insertStmt->execute();
        if ($insertStmt) {
            // 
            
        //     echo "<script>
        // alert('USER CREATED');
        //  </script>";
         header("Location: ../index.php");
         
       
        } else {
        //     echo "<script>
        // alert('RAN INTO AN ERROR');
        // </script>";
        $_SESSION["msg"]="ran into an error";
        header("Location: ../user/register.php");
        }

    } else {
       
        header("Location: ../user/register.php");



    }
}




// handling login form data
if(isset($_GET['login'])){
    $loginFormData=loginForm();
    // header("Location: ../user/login.php");

}
?>