<?php
require 'function.php';

if( isset($_POST["registrasi"]) ){

    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan');
            </script>";
    } else {
        echo mysqli_eror($conn);
    }
}



?>


<!DOCTYPE html>
<html lang="en">
  <html>
    <head>
      <title>Sign Up</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <meta charset="utf-8" />
              <!--=============== BOXICONS ===============-->
              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

              <!--=============== CSS ===============-->
              <link rel="stylesheet" href="assets/css/styles.css">

      <link rel="stylesheet" type="text/css" href="css/signup.css" />
      <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <link
        href="https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600"
        rel="stylesheet"
        type="text/css"
      />
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    </head>

    <body class="body">
      <div class="login-page">
        <div class="form">
          <form action="" method="post">
            <lottie-player
              src="https://assets4.lottiefiles.com/datafiles/XRVoUu3IX4sGWtiC3MPpFnJvZNq7lVWDCa8LSqgS/profile.json"
              background="transparent"
              speed="1"
              style="justify-content: center"
              loop
              autoplay
            ></lottie-player>
            <input for="name" type="text" placeholder="full name" />
            <input for="email" type="text" placeholder="email address" />
            <input for="username" type="text" placeholder="pick a username" />
            <div class="input">
            <div class="input__overlay" id="input-overlay"></div>

            <i class='bx bx-lock-alt input__lock'></i>
            <input for="password" type="password" placeholder="Password..." class="input__password" id="input-pass">
            <i class='bx bx-hide input__icon' id="input-icon"></i>
        </div>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>            <i class="fas fa-eye" onclick="show()"></i>
            <br>
            <br>
          </form>

          <form class="login-form">
            <button type="submit" name="registrasi" onclick="window.location.href='login.html'">
              SIGN UP
            </button>
          </form>
        </div>
      </div>
    </body>
    <script>
      function show() {
        var password = document.getElementById("password");
        var password2 = document.getElementById("password2");
        var icon = document.querySelector(".fas");

        // ========== Checking type of password ===========
        if (password.type == "password") {
          password.type = "text";
        } else {
          password.type = "password";
        } ;
        if (password2.type == "password2") {
          password2.type = "text";
        } else {
          password2.type = "password";
        } 
      }
    </script>
  </html>
</html>
