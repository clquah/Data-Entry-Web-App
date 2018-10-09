<?php 
  session_start();
  session_destroy();
  ?>
<?php
  $timezone = "Asia/Colombo";
  date_default_timezone_set($timezone);
  $today = date("m/d/Y");
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Data Entry Form">
      <meta http-equiv="refresh" content="150;url=index.html" />
      <link rel="icon" href="#">
      <title>Data Entry</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="cover.css" rel="stylesheet">
   </head>
   <body class="text-center">
      <div class="cover-container d-flex h-100 w-100 p-2 mx-auto flex-column">
         <header class="masthead mb-auto">
            <div class="inner">
            <?php include 'navbar.php'; ?>
            </div>
            <hr style="height:35px">
         </header>
         <main role="main" class="inner cover">
            <h1 class="cover-heading">New Data Entry</h1>
            <br>
            <form id="formcontainer" action="storing.php" method="POST">
               <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Name:</label>
                  <div class="col-sm-10">
                     <input type="name" class="form-control" name="name" id="inputName" placeholder="Name" required>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="inputDate" class="col-sm-2 col-form-label">Date:</label>
                  <div class="col-sm-10">
                     <input type="date" class="form-control" name="date" value="<?php echo $today; ?>" id="inputDate" placeholder="Date" required>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="inputID" class="col-sm-2 col-form-label">ID:</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="id" id="inputID" placeholder="Employee ID" required>
                  </div>
               </div>
               <div class="form-group row">
                  <label for="inputData" class="col-sm-2 col-form-label">Data:</label>
                  <div class="col-sm-10">
                     <input type="text" class="form-control" name="data" id="inputData" placeholder="Data" required>
                  </div>
               </div>
               <div>
                  <input type="submit" class="btn btn-primary"  value="Submit">
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
