<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Portal</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="resource/css/styles.css">
</head>
<body>
    <header>
    <?php require_once("nav/nav.php"); ?>

        <div class="container-fluid p-0 ">
            <div class="cover"></div>
            <video id="videoBG" autoplay muted loop>
                <source src="resource/mp4/bg.mp4" type="video/mp4">
                </video>
            <div class="container bg">
                <div class="jumbotron">
                    <h1 class="display-4 text-center bottomline">Office of the University Registrar <span class="ceucolor2">Portal</span></h1>
                    <p class="text-center">The Centro Escolar University Office of the Registrar supports the college/schools
and the university in realizing its commitment for the total development of students by providing
efficient and quality service in terms of registering, updating, evaluating and safekeeping of
student records, participating in curriculum making/revision and implementing the
University and CHED policies, rules and regulations.</p>
                    <p class="lead">
                    <div class="container-fluid">
                        <div class="col col-sm-12  text-center mt-5">
                            <a class="btn btn-outline-light w-50 " href="alumniRegister.php" role="button">I'm an Alumni</a>
                        </div>
                        <div class="col col-sm-12  text-center mt-4">
                            <a class="btn btn-outline-light w-50 " href="login.php" role="button">Log-in</a>
                        </div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </header>
    <?php require_once ("footer/footer.php");?>

    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
</body>
</html>
