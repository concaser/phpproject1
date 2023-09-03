<?php
// include 'navbar.php';
include 'dbconnect.php';

session_start();
?>
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/navbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="d-flex flex-row gap-5 justify-content-center align-items-center">
    <?php
    $sql = "SELECT * FROM `lodge_rooms`";
    $res = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($res)){
        $_SESSION['room_id'] = $row['room_no'];
        ?>
    <div class="card" style="width:16rem;">
    <?php
    echo '<img src='.$row["room_main_image"].' class="p-4 object-fit-cover" alt="heelo">';
    ?>
<div class="card-body">
    <div class="card-title"><?php echo $row['room_type']?></div>
    <div class="card-text">
        <span>rent : <?php echo $row['room_rent']?>$
        </span>
       
</div>
</div>
<form action="fetchRoom.php" method="post" target="_self">
    <button class="btn-primary"   name="room" value=<?php echo $row['room_id'];?>>Rent it</button>
</form>
</div>
    <?php
    }


    ?>
    </div>
    
    
</body>
</html>