<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/socmed/resource/php/class/core/init.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Portal</title>
  <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="resource/css/styles.css">
</head>

<body>
  <?php require_once("nav/nav.php"); ?>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-8">

        <form class="text-center border border-light p-5 shadow puff-in-center" action="" method="post">
          <img src="resource/img/signup.png" alt="logo" class="logo">
          <br>
          <p class="h4 mb-4">Sign in</p>
          <?php logd(); ?>
          <input type="text" id="username" class="form-control mb-4" name="username" placeholder="Enter Username" required>
          <input type="password" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Enter Password" name="password" required>
          <div class="d-flex justify-content-around">
          </div>
          <input type=hidden name="token" value="<?php echo Token::generate(); ?>">
          <input type="submit" class="btn btn-dark btn-block my-4" value="Login" />
        </form>

        <?php require_once ("footer/footer.php");?>


      </div>
    </div>
  </div>

  <script src="vendor/js/jquery.js"></script>
  <script src="vendor/js/popper.js"></script>
  <script src="vendor/js/bootstrap.min.js"></script>
</body>

</html>
