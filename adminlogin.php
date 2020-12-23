<?php
include("./inc/adminlogin.inc.php");
?>
<html lang="en">
  <head>
    <title>Login V19</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
          <form class="login100-form validate-form" method="post" action="">
            <span class="login100-form-title p-b-33"> Admin Login </span>
            <p class=" error"> <?php echo $error; ?> </p>
            <div
              class="wrap-input100 validate-input"
              data-validate="Valid email is required: ex@abc.xyz"
            >
              <input
                class="input100"
                type="text"
                name="email"
                placeholder="Email"
              />
              <span class="focus-input100-1"></span>
              <span class="focus-input100-2"></span>
            </div>

            <div
              class="wrap-input100 rs1 validate-input"ata-validate="Password is required"
            >
              <input
                class="input100"
                type="password"
                name="pass"
                placeholder="Password"
              />
              <span class="focus-input100-1"></span>
              <span class="focus-input100-2"></span>
            </div>

            <div class="container-login100-form-btn m-t-20">
              <button name="submit-admin-login" class="login100-form-btn" type="submit">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="js/main.js"></script>
  </body>
</html>
<?php
?>
