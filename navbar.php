<?php
session_start();
require_once 'checkuser.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="./styles/navbar.css">
    <link rel="stylesheet" href="../output.css">

    <title>Document</title>
</head>

<body>
    <nav class="navbar flex h-16  w-full sticky items-center  z-10" aos="fade-right" aos-duration="1200" id="navbar">
        <button class="mobBtn"><span class="material-symbols-outlined">
                restaurant_menu
            </span></button>
        <ul class="menu flex justify-around w-1/3 bg-white relative left-1/2" id="menu">
            <li><a href="./header.php" target="self">Home</a></li>
            <li><a href="./explore_rooms.php" target="_self">Book</a></li>
            <li><a href="#" target='self'>Docs</a></li>
            <li><a href="#" target='self'>About</a></li>
            <li><a href="#" target="self">Support</a></li>
            <li><button class="closeBtn"><span class="material-symbols-outlined">
                        close
                    </span></button></li>
        </ul>
        <?php

        if (isset($_SESSION['signmail']) || isset($_SESSION['logmail'])) {
            echo " <button class='btn' name='logout' type='submit' onclick='redirect(1)'>
            <span class='material-symbols-outlined'>
            account_circle
            </span></button>";
        } else {
            echo "<button class='btn' name='login' type='submit' onclick='redirect(2)'>
            <span class='material-symbols-outlined'>
        person
        </span></button>";
        }


        ?>


    </nav>

    <script>
        let navbar = document.getElementById("navbar");
        let mobile = document.querySelector(".mobBtn");
        let menu = document.getElementById('menu');
        mobile.addEventListener('click', () => {
            setTimeout(() => {
                menu.style.display = 'flex';
                menu.style.transform = 'scale(1)'
            }, 500)

            navbar.style.height = '250px'

        })
        let close = document.querySelector(".closeBtn");
        close.addEventListener('click', () => {
            if (menu.checkVisibility)
                menu.style.display = 'none';
            navbar.style.height = '';
        })
        const redirect = (x) => {
            x = parseInt(x);
            location.href =  (x === 2) ? "./log.php" : "./account.php";
        }
    </script>
</body>

</html>