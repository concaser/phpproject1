<?php
session_start();
require_once 'navbar.php';
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/hotel.css">
</head>
<body>
<?php
if (isset($_SESSION['roomid'])) {
  $sql = "SELECT * FROM `lodge_rooms` WHERE room_id = '$roomid";
  $res = mysqli_query($conn, $sql);
}
while ($row = mysqli_fetch_assoc($res)) {
    echo '<div class="outer">';
    echo '<div class="data">';
  echo "<h2>".$row['room_type']."</h2>";
   echo "<ul>";
        echo " <li>Room no : ".$row["room_no"]."</li>";
        echo "<li>Room id : ".$row["room_id"]."</li>";
        echo "<li>Room rent :".$row["room_rent"]."</li>";
        echo '</ul>';
        echo '<div>';
        echo "<div class='room_desc'>Room desc : ".$row["room_desc"]."Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate optio, vero aliquid labore sint inventore voluptatibus unde ut magnam id ad aperiam nam quod consequatur molestiae, nulla minima! Tenetur, odio?
         Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet consectetur pariatur repellendus vel error? Voluptatum ab velit exercitationem ratione repellat, commodi animi molestias dignissimos illum voluptatibus molestiae fuga necessitatibus. Omnis.

         "."</div>";

       echo '<div class="mainimage">';
    echo '<img src=' . $row["room_main_image"];
    echo 'alt="">';
    echo '</div>';
    echo '<div class="otherimages">';
    echo '<img src='.$row["room_image2"].' alt="">';
    echo '<img src='.$row["room_image3"].' alt=""></div>';
       echo' </div>';
    echo '</div>';

}
 ?>   
<script></script>
</body>
</html>