<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../output.css">

    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="../node_modules/aos/dist/aos.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>

    <title>Document</title>

</head>

<body>
<?php
include 'navbar.php';

?>

  <div class="shp2">
  <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="fill" x1="0%" y1="0%" x2="100%" y2="0%" gradientTransform="rotate(45 0.5 0.5)"><stop offset="0%" stop-color="#7f47e6"></stop><stop offset="100%" stop-color="#c57aff"></stop></linearGradient></defs><path d="M90,64Q89,78,74.5,79Q60,80,50,80.5Q40,81,32,75Q24,69,19,59.5Q14,50,19,40.5Q24,31,31.5,23Q39,15,51,12.5Q63,10,69,21Q75,32,83,41Q91,50,90,64Z" stroke="none" stroke-width="0" fill="url(#fill)"></path></svg>
  </div>
  <div class="shp2">
  <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="fill" x1="0%" y1="0%" x2="100%" y2="0%" gradientTransform="rotate(45 0.5 0.5)"><stop offset="0%" stop-color="#d947e6"></stop><stop offset="100%" stop-color="#f84f4f"></stop></linearGradient></defs><path d="M86.5,59.5Q76,69,68.5,76Q61,83,48.5,87.5Q36,92,24,85Q12,78,15,64Q18,50,19,39Q20,28,28.5,19.5Q37,11,49,14Q61,17,68,24.5Q75,32,86,41Q97,50,86.5,59.5Z" stroke="none" stroke-width="0" fill="url(#fill)"></path></svg>
  </div>
    <section class="container">
        <div class="content">
            <h1 class="m-3">Enthusiasm Overload</h1>
            <p class="m-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel deleniti, dolores laudantium
                voluptas est explicabo illo, quibusdam sapiente excepturi ullam harum aliquid sit facere iusto eos. Vero
                dolorum dolores quod.</p>
                
                <div class="compls"><p>Connect:</p>
                <div class="social">
                    
                <button class="cont-btns"><iconify-icon icon="ps:whatsapp"></iconify-icon></button>
                <button class="cont-btns"><iconify-icon icon="basil:instagram-outline"></iconify-icon></button>
                <button class="cont-btns"><iconify-icon icon="material-symbols:call-outline"></iconify-icon></button>
                <button class="cont-btns"><iconify-icon icon="line-md:email"></iconify-icon></button>
            </div>
</div>
        </div>
        <div class="pic">
            <img src="./assets/undraw_Eating_together_re_ux62.png" alt="">
        </div>
    </section>



    <div class="shp"></div>

    <div class="Welcome">
         <span id='Wel'>Welcome</span> 
               <span class="material-symbols-outlined">
            arrow_forward
        </span>
    </div>

    <?php
    include './home.php';
  
    ?>



</body>


</html>