<?php
include 'signup.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="./styles/log.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <script>
    function occur(em) {
      em = parseInt(em)
      event.preventDefault();
      let hider = document.getElementById('hider');

      (em === 1) ? x() : y();
      function y() {
        hider.style.transform = "translateX(480px)";
        setTimeout(() => {
          hider.style.background = "url('./assets/qonto-log-in-connection-illustration-tom-souverain.gif')"
          hider.style.backgroundSize = "cover"
          hider.style.backgroundPosition = "center"

        }, 300);
      }
      function x() {
        hider.style.transform = "translateX(0px)";
        setTimeout(() => {
          hider.style.background = "url('./assets/puzzle-14.gif')"
          hider.style.backgroundSize = "cover"

        }, 300);
      }
    }

  </script>
</head>

<body>
<?php
if(isset($_SESSION['logmail'])){
  echo '<script>swal("Logged In","login successful","success").then((value)=>{location.href = "header.php";});</script>';
  exit;
}
if(isset($_SESSION['signmail'])){
  echo '<script>swal("Signed Up","signed up successfuly","success").then((value)=>{location.href = "header.php";});</script>';
  exit;
}

?>

  <div class="blob">
    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="fill" x1="0%" y1="0%" x2="100%" y2="0%" gradientTransform="rotate(113 0.5 0.5)">
          <stop offset="0%" stop-color="#e64747"></stop>
          <stop offset="100%" stop-color="#ff7a7a"></stop>
        </linearGradient>
      </defs>
      <path d="M84,63Q71,76,55.5,86Q40,96,29.5,80.5Q19,65,15,48Q11,31,26.5,23Q42,15,59.5,15.5Q77,16,87,33Q97,50,84,63Z"
        stroke="none" stroke-width="0" fill="url(#fill)"></path>
    </svg>
  </div>
  <div class="blob">
    <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <linearGradient id="fill" x1="0%" y1="0%" x2="100%" y2="0%" gradientTransform="rotate(113 0.5 0.5)">
          <stop offset="0%" stop-color="#4748e6"></stop>
          <stop offset="100%" stop-color="#7a7bff"></stop>
        </linearGradient>
      </defs>
      <path
        d="M88.5,60.5Q78,71,69.5,78Q61,85,49,87Q37,89,29.5,80Q22,71,13,60.5Q4,50,11.5,38.5Q19,27,27.5,16Q36,5,48.5,10.5Q61,16,71.5,21.5Q82,27,90.5,38.5Q99,50,88.5,60.5Z"
        stroke="none" stroke-width="0" fill="url(#fill)"></path>
    </svg>
  </div>
  <section class="sec">
    <div class="slide">

      <form action="signup.php" method="POST" name="signUpForm">
        <h2>Sign Up</h2>
        <img src="../assets/undraw_personal_information_re_vw8a.png" alt="" id="signPic" style="mix-blend-mode: darken;"
          height="120px" width="120px" />

        <input type="email" name="signUpMail" id="signUpMail" placeholder="Email" />

        <input type="password" name="signUpPass" id="signUpPass" placeholder="Password" />

        <input type="password" name="conSignUpPass" id="conSignUpPass" placeholder="Confirm Password" />
    
        <div class="buttons"><input type="submit" value="sign up" id="signUp" name='signUp'/>

          <button id="portChanger" onclick="occur(1)">Login</button>
        </div>
        <div>
          <?php
          echo "<p style='color: red;'>$warning</p>";
        ?>
        </div>
        <p>Already a user, then Login !</p>

      </form>
    </div>
    <?php

    ?>

    <div class="hider" id="hider"></div>
    <p>or</p>
    <div class="slide">
      <form action="login.php" method="post" name="LoginForm">
        <h2>Login</h2>
        <img src="../assets/undraw_Mobile_login_re_9ntv.png" height="120px" style="mix-blend-mode: darken;"
          width="120px" alt="" id="logPic" />

        <input type="email" name="logMail" id="logMail" placeholder="Email" />


        <input type="password" name="logPass" id="logPass" placeholder="Password" />
        <div class="buttons">
          <input type="submit" value="Login" id="login" name='login'/>
          <button id="portChanger" onclick="occur(0)">Sign Up</button>
        </div>
        <p>Don't have an account.Click on sign up!</p>


      </form>
    </div>
  </section>

</body>

</html>