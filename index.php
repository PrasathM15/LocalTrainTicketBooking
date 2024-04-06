<?php
include 'connect.php' ;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chennai Railways</title>
    <link rel="stylesheet" href="style4.css">
    <link rel="shortcut icon" href="logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
  <style>
  body {
  background-image:url("train img3.png");
  background-repeat:no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-color:Black;
  background-size: cover;
}
</style>
    <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action='authenticate.php' method='post' class="login">
            <div class="field">
              <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password"  name="password" placeholder="Password" required>
            </div>
            
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name='login_submit' value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>
          <form action='register_insert.php' method='post' class="signup">
            <div class="field">
              <input type="Text" name="name"  placeholder="Name" required>
            </div>
            <div class="field">
              <input type="email"  name="email" placeholder="Email Address" required>
            </div>
            <div class="field">
              <input type="password"  name="password" placeholder="Password" required>
            </div>
            
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" name='register_submit' value="Signup">
            </div>
          </form>
        </div>
      </div>
    </div>

    <script>
      const loginText = document.querySelector(".title-text .login");
      const loginForm = document.querySelector("form.login");
      const loginBtn = document.querySelector("label.login");
      const signupBtn = document.querySelector("label.signup");
      const signupLink = document.querySelector("form .signup-link a");
      signupBtn.onclick = (()=>{
        loginForm.style.marginLeft = "-50%";
        loginText.style.marginLeft = "-50%";
      });
      loginBtn.onclick = (()=>{
        loginForm.style.marginLeft = "0%";
        loginText.style.marginLeft = "0%";
      });
      signupLink.onclick = (()=>{
        signupBtn.click();
        return false;
      });
    </script>

  </body>
</html>
