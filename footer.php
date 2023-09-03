<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../output.css" />
    <link rel="stylesheet" href="./styles/footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- footer contact icons -->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <footer class=" mt-10">
      <div class="anima"></div>
      <div class="items">
        <div class="elem">
          <ul>
            <li><h2>Enthusiasm Overload</h2></li>
            <li>
              <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. In,
                possimus
              </p>
            </li>
            <li>
              <div class="enq">
                <form action="" method="post">
                <label for="enquiry">Enquiry : </label>
                <input type="email" name="emailAddress" id="email" />
                <button type="submit" name='enquiry'><span class="material-symbols-outlined">
                    send
                    </span></button>
                </form>
                </div>
                <?php
                  if(isset($_POST['enquiry'])){
                  $enqEmail = $_POST['emailAddress'];
                  echo '<script>swal("Enquired!", "Enquiry Sent successfully!!", "success").then((value) => {
                    location.href="header.php";
                  });</script>';
                  exit;
                  }
                ?>
            </li>
          </ul>
        </div>
        <div class="elem">
          <ul>
            <li><h2>Working Hours</h2></li>
            <li>Mon-Thur : 9:00 am - 9:00 pm</li>
            <li>Fri-Sat : 9:00 am - 11:00 pm</li>
            <li>
              Sunday:9:00 am - 1:00 pm
            </li>
          </ul>
        </div>
        <div class="elem">
          <ul>
            <li><h2>Contact Us</h2></li>
            <li>
              <p>
                Have some queries, want to say Hi!.Feel free to contact us 24x7
                We'll be Happy to help you
              </p>
            </li>
            <li>
                <div><span class="material-symbols-outlined">
                    location_on
                    </span> Kolhapur,India</div>
                </li>
            <li>
                <div> <span class="material-symbols-outlined">
                    call
                    </span> Phone : 0231-9022-3453</div>
               </li>
            <li><div><span class="material-symbols-outlined">
                mail
                </span> Email : enthusia23@gmail.com</div></li>
          </ul>
        </div>
        <div class="socialConts">
          
            <ul>
              <li><iconify-icon icon="logos:facebook"></iconify-icon></li>
              <li><iconify-icon icon="skill-icons:instagram"></iconify-icon></li>
              <li><iconify-icon icon="logos:google-gmail"></iconify-icon></li>
              <li><iconify-icon icon="devicon:twitter"></iconify-icon></li>
              <li><iconify-icon icon="logos:whatsapp-icon"></iconify-icon></li>
            </ul>
        </div>
      </div>
      
    </footer>
  </body>
</html>
