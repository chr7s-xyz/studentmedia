<?php 

include($_SERVER['DOCUMENT_ROOT'].'/studentmedia/php/function.php');
global $conn;


// handling register form data
if(isset($_GET['register'])){

    // inserting form data into db
$registerFormData=registerForm();
if($registerFormData[7]){
$username=$registerFormData[0];
$email=$registerFormData[1];
$name=$registerFormData[2];
$college=$registerFormData[3];
$course=$registerFormData[4];
$hashedPassword=$registerFormData[5];
$collegeID=$registerFormData[6];

    $insertUserQuery = "insert into user (username,name,college,course,email,collegeID,password,joined) values 
    ('$username','$name','$college','$course','$email','$collegeID','$hashedPassword',NOW())";
    $executeInsertUser = mysqli_query($conn, $insertUserQuery);
    if ($executeInsertUser) {
        echo "<script>
        alert('USER CREATED');
        </script>";
    } else {
        echo "<script>
        alert('RAN INTO AN ERROR');
        </script>";
    }
}
}
?>