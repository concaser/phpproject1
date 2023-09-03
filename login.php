<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
</body>
</html>
<?php
session_start();
require_once 'checkuser.php';
include('dbconnect.php');
$email = $_POST['logMail'];
$pass = $_POST['logPass'];

$sql = "SELECT *FROM `login` where `username` = '$email' AND `password` = '$pass'";
$res = mysqli_query($conn, $sql);
$num = mysqli_num_rows($res);
if(loginUser($email,$pass)){
    $_SESSION['adminmail'] = $email;
    echo '<script>swal("Logged In","admin login successful","success").then((value)=>{location.href = "admin.php";});</script>';
    exit;

}
if ($num > 0) {
    // echo '<script>alert("done")</script>';
    $_SESSION['logmail'] = $email;
    redirect('account.php');
}
?>