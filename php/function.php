<?php
//  functions to reuse code

include ($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/connection.php');

//function to validate register data 
function registerForm()
{
    global $conn;
    if (isset($_POST['submitUserForm'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $college = $_POST['college'];
        $course = $_POST['course'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $collegeID = $_FILES['idcard']['name'];
        $tempCollegeID = $_FILES['idcard']['tmp_name'];



        // check if username and email is unique, passwords match.
        // save form data so user dont have to fill it again if error occurs
        $usernameQuery = "select * from user where username='$username' or email='$email'";
        $executeUsernameQuery = mysqli_query($conn, $usernameQuery);
        if (mysqli_num_rows($executeUsernameQuery) > 0) {
            echo "<script>
        alert('USERNAME OR EMAIL IS ALREADY PRESENT');
        </script>";
            $data = array();
        } else if ($password != $confirmPassword) {
            echo "<script>
        alert('PASSWORDS DO NOT MATCH');
        </script>";
            $data = array();
        } else {
            // storing college id in folder named after student id. hashing password
            $hashedPassword = password_hash($password, PASSWORD_ARGON2I);


            $getRowsInUser = "SELECT MAX(userID) FROM user";
            $executeRowsInUser = mysqli_query($conn, $getRowsInUser);
            $totalRows = mysqli_fetch_array($executeRowsInUser);
            
            $totalRowsInUser = $totalRows[0]+1;
            mkdir($_SERVER['DOCUMENT_ROOT'] . "/studentmedia/assets/images/idCard/$totalRowsInUser");
            move_uploaded_file($tempCollegeID, $_SERVER['DOCUMENT_ROOT'] . "/studentmedia/assets/images/idCard/$totalRowsInUser/$collegeID");

            $data = array($username, $email, $name, $college, $course, $hashedPassword, $collegeID, true);
        }
        return $data;
    }
}

?>