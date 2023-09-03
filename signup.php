
<?php
session_start();
include 'dbconnect.php';
require_once 'checkuser.php';
$warning = '';

if($_SERVER['REQUEST_METHOD']=='POST'){
  $email = $_POST['signUpMail'];
  $pass = $_POST['signUpPass'];
  $cpass = $_POST['conSignUpPass'];
  if ($email == '' || $pass == '' || $cpass == '') {
    $warning = 'fields cannot be empty';
  }
  else {
    if (signUpUser($email, $pass, $cpass)==true){
            $sql = "SELECT * FROM `login` WHERE `username` = '$email'";
            mysqli_query($conn, $sql);
            $num = mysqli_affected_rows($conn);
            if ($num > 0) {
              $warning = "User exist , please try to Login!!";
        echo '<script>location.href = "log.php"</script>';

            }
             else {
                $sql = "INSERT INTO `login` VALUES (NULL,'$email','$pass')";
                if (mysqli_query($conn, $sql)) {
                    $_SESSION['signmail'] = $email;
                     echo '<script>location.href = "log.php";</script>';
                    }
            }
      
      
      }
    }

  }
  ?>