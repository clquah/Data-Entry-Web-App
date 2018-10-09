<?php 
  session_start();
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
      <title>Change Password</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="cover.css" rel="stylesheet">
   </head>
   <body class="text-center">
      <div class="cover-container d-flex h-100 p-2 mx-auto flex-column">
         <header class="masthead mb-auto">
            <div class="inner">
            <?php include 'navbar.php'; ?>
            </div>
            <hr style="height:35px">
         </header>
         <main role="main" class="inner cover">
            <h1 class="cover-heading">CHANGING ADMIN PASSWORD</h1>
            <br>
            <form id="formcontainer" action="changepassword.php" method="POST">
               <div class="form-group row">
                  <label for="inputnewpassword" class="col-sm-2 col-form-label"> New Password:</label>
                  <div class="col-sm-10">
                     <input type="password" class="form-control" name="password" id="inputnewpassword" placeholder=" new password" required>
                  </div>
                </div>
                  <div class="form-group row">
                  <label for="reinputpassword" class="col-sm-2 col-form-label"> Reenter New Password:</label>
                  <div class="col-sm-10">
                     <input type="password" class="form-control" name="password2" id="reinputpassword" placeholder=" reenter new password" required>
                  </div>
               </div>
               <div>
                  <input type="submit" class="btn btn-primary"  value="CHANGE">
               </div>
            </form>
         </main>
         <footer class="mastfoot mt-auto">
         </footer>
      </div>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>