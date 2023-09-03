<?php
require_once 'navbar.php';
require_once 'checkuser.php';
?>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<section class=''>
    <div class="empty">
        <h1>Oops ! Looks like you haven't purchased anything</h1>
        <p><a href="#">Book a room</a></p>

    </div>
    <div class="cart">
        <div><input type="checkbox" name="Select all" id="allItems"></div>
        <div class='cratItem'>
            <div class='itemImage'></div>
            <div class='itemDesc'></div>
            <div ></div>
        </div>
    </div>
    <div class="aside"></div>
    <div class="log">
    <form action="" method="post"><button type="submit" name="logout">Logout</button></div></form>    
    <?php
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        echo '<script>swal("Logged Out!", "Logged Out successfully!!", "success").then((value) => {
                    location.href="header.php";
                  });</script>';
        echo 'logged out';
        exit;

    }
    ?>
</section>