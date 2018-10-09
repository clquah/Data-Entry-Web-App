<?php 
  session_start();
  if(isset($_SESSION['valid'])){
    echo $_SESSION['valid'];
  }
  if(!isset($_SESSION['valid'])){
    header("Location: checkadmin.php");
    exit;
  }
  ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Data Entry Application">
      <meta http-equiv="refresh" content="150;url=index.html" />
      <link rel="icon" href="#">
      <title>Admin Settings</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="cover.css" rel="stylesheet">
   </head>
   <body class="text-center">
      <div class="cover-container d-flex h-100 p-2 mx-auto flex-column">
         <header class="masthead mb-auto">
            <div class="inner">
            <?php include 'navbar.php' ?>
            </div>
         </header>
         <main role="main" class="inner cover">
            <h1 class="cover-heading">ADMIN SETTINGS</h1>
            <p class="lead">for</p>
            <div>
               <a class="btn btn-primary" href="changepasswordinput.php" role="button">Changing Password</a>
            </div>
            <div>
               <br>
               <a class="btn btn-primary" href="removedatainput.php" role="button">Remove Data</a>
            </div>
         </main>
         <footer class="mastfoot mt-auto">
         </footer>
      </div>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>