<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Data Entry Application">
      <meta http-equiv="refresh" content="150;url=index.html" />
      <link rel="icon" href="#">
      <title>Data Entry Status</title>
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
            <?php
               include 'databaseinfo.php';
               $valid = false;
               $name=$_POST['name'];
               $date=$_POST['date'];
               $id=$_POST['id'];
               $data=$_POST['data'];
               
               $db = pg_connect( "$host $port $dbname $credentials"  );
               if(!$db) {
                 echo "Error : Unable to open database\n";
               }
               
               $sql =<<<EOF
               
               INSERT INTO datadb (name,starting_date,id,data) VALUES ('$name', '$date', '$id', '$data' );
               
EOF;
               
               $ret = pg_query($db, $sql);
               if($ret && pg_affected_rows($ret) !== 0) {
                 $valid = true;
               }
               pg_close($db);
               ?>
            <?php if($valid){ ?>
            <h1 class="cover-heading">Your storing request is success!</h1>
            <?php } ?>
            <?php if(!$valid){ ?>
            <h1 class="cover-heading">Input invalid! Please try again</h1>
            <?php }?>               
            <div>
               <br>
               <a class="btn btn-primary" href="dataentry.php" role="button">Back</a>
            </div>
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