<?php

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

        $insertStmt = $conn->prepare("insert into user (name,username,email,college,course,password,collegeID,verified) values (?,?,?,?,?,?,?,?)");
        $insertStmt->bind_param("sssisssi", $name, $username, $email, $college, $course, $hashedPassword, $collegeID,0);
        $insertStmt->execute();
        if ($insertStmt) {
            echo "<script>
        alert('USER CREATED');
        </script>";
        } else {
            echo "<script>
        alert('RAN INTO AN ERROR');
        </script>";
        }

    } else {
        echo "
       setTimeout(function(){
       window.open('../user/register.php','_self');
       },0)";



    }
}
?>