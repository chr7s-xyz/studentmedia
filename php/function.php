<?php
//  functions to reuse code


include ($_SERVER['DOCUMENT_ROOT'] . '/studentmedia/php/connection.php');

//function to validate register data 
function registerForm()
{
    $_SESSION['msg']="";
    global $conn;
    if (isset($_POST['submitUserForm'])) {
        $username = trim($_POST['username']);
        $email = $_POST['email'];
        $name = trim($_POST['name']);
        $college = $_POST['college'];
        $course = $_POST['course'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $collegeID = $_FILES['idcard']['name'];
        $tempCollegeID = $_FILES['idcard']['tmp_name'];
        $idCardType = $_FILES['idcard']['type'];



        // check if username and email is unique, passwords match.
        // save form data so user dont have to fill it again if error occurs
        $usernameQuery = $conn->prepare("select * from user where username= ? OR email=?");
        $usernameQuery->bind_param("ss", $username, $email);
        $usernameQuery->execute();
        $usernameQuery->store_result();
        // $usernameQuery->bind_result($username,$email);
        //$username->fetch()

        //    $rows=mysqli_num_rows($result);
        if ($usernameQuery->num_rows > 0) {
            //     echo "<script>
            // alert('username exist ')</script>";

            $_SESSION["msg"] = 'username/email exists';
            header("Location: ../user/register.php");

            $data = array($username, $email, $name, $college, $course, $collegeID, $password, $confirmPassword);


        } else if ($password != $confirmPassword) {
            //     echo "<script>
            // alert('PASSWORDS DO NOT MATCH');
            // </script>";
            $_SESSION["msg"] = 'password do not match';
            header("Location: ../user/register.php");
            $data = array($username, $email, $name, $college, $course, $collegeID, $password, $confirmPassword);


        } else {
            // storing college id in folder named after student id. hashing password
            $hashedPassword = password_hash($password, PASSWORD_ARGON2I);


            $getRowsInUser = "SELECT MAX(userID) FROM user";
            $executeRowsInUser = mysqli_query($conn, $getRowsInUser);
            $totalRows = mysqli_fetch_array($executeRowsInUser);


            $totalRowsInUser = $totalRows[0] + 1;
            $name = basename($totalRowsInUser);
            $_SESSION['userID'] = $totalRowsInUser;
            if ($idCardType == "image/jpeg" || "image/jpg" || "image/png") {
                $type = substr($idCardType, 6);
                move_uploaded_file($tempCollegeID, $_SERVER['DOCUMENT_ROOT'] . "/studentmedia/assets/images/idCard/$name.$type");
            }






            $data = array($username, $email, $name, $college, $course, $hashedPassword, $collegeID, "valid");
        }
        return $data;

    }
}


// // creating a popup template
// function myPopup($icon,$title,$msg){
//     echo  "
//     <div id='popup' class='popupClass'>
//     <div class='content'>
//      <p>$icon - $title                     <p onclick='closePopup(1000)'>X</p></p>
//     <p>$msg</p></div>


//     </div>
//     ";

// }


// handlinglogin validation
function loginForm()
{
    $_SESSION['msg']="";
    global $conn;
    if (isset($_POST['submitUserForm'])) {
        $name = trim($_POST['name']);
        $password = $_POST['password'];

        //logic
        $loginQuery = "select * from user where username= '$name' OR email='$name'";
        $result = $conn->query($loginQuery);
        if ($result->num_rows > 0) {
            // verifying password
            while ($row = $result->fetch_assoc()) {
                $hashedPassword=$row['password'];
                $userID=$row['userID'];
               if(password_verify($password,$hashedPassword)) {
                    // valid password
                    $_SESSION['userID']=$userID;
                    header("Location: ../index.php");
                }else{
                    $_SESSION['msg']="INCORRECT PASSWORD";
                    header("Location: ../user/login.php");
                }

            }
        }else{
            $_SESSION['msg']="NON EXISTENT USER";
            header("Location: ../user/login.php");
        }
    }
}


?>