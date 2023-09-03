<?php
session_start();
require_once 'checkuser.php';
include('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/admin.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <title>Document</title>
</head>

<body>
    <header>
        <form action="" method="post">
        <button class='btn' name='logout' type='submit'>
            <span class='material-symbols-outlined'>
                logout
            </span></button>
        </form>
        
    </header>
    <?php
if (isset($_SESSION['adminmail'])) {

    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        echo ' <script>swal("Logged Out!", "Logged Out successfully!!", "success").then((value) => {
                    location.href="header.php";
                   });</script>';

    }
}
    ?>
    <div class="adminForm">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Room no :</label>
                <input type="number" name="room_id" id="">
            </div>

            <div class="form-group">
                <label for="">Room id :</label><input type="number" name="room_no" id="">
            </div>
            <div class="form-group">
                <label for="">Room type :</label>
                <input type="text" name="room_type" id="">
            </div>
            <div class="form-group">
                <label for="">Room rent :</label>
                <input type="number" name="room_rent" id="">
            </div>
            <div class="form-group">
                <label for="">Room main :</label>
                <input type="text" name="room_main_image" id="">
            </div>
           
            <div class="form-group">
                <label for="">Room image 2 :</label>
                <input type="text" name="room_image2" id="">
            </div>
            <div class="form-group">
                <label for="">Room image 3 :</label>
                <input type="text" name="room_image3" id="">
            </div>
            <div class="form-group">
                <label for="">Room desc :</label>
                <input type="text" name="room_desc" id="">
            </div>
            <div class="form-group"><input type="submit" value="Add" name='addRoom'></div>
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $add = $_POST['addRoom'];
        if (isset($add)) {
            $room_no = $_POST['room_no'];
            $room_id = $_POST['room_id'];
            $room_type = $_POST['room_type'];
            $room_rent = $_POST['room_rent'];
            $room_main_image = $_POST['room_main_image'];
            $room_image2 = $_POST['room_image2'];
            $room_image3 = $_POST['room_image3'];
            $room_desc = $_POST['room_desc'];
            echo $room_no;
            $sql = "INSERT INTO `lodge_rooms` VALUES('$room_id','$room_no','$room_type','$room_rent','$room_main_image','$room_image2','$room_image3','$room_desc')";
            if (mysqli_query($conn, $sql)) {
                echo '<script>swal("Success!", "item Added successfully!!", "success").then((value) => {
             location.href="admin.php";
           });</script>';
            }
        }
    }
    ?>


</body>

</html>