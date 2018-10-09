<?php
session_start() ;
session_destroy(); 
?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Data Entry Application">
      <meta http-equiv="refresh" content="150;url=index.html" />
      <title>All Data in Record</title>
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
            <h1 class="cover-heading">List of all Data</h1>
            <br>
            <table class = "table table-bordered">
               <tbody>
                  <?php
                     $valid       = false;
                     include 'databaseinfo.php';

                     
                     $db = pg_connect("$host $port $dbname $credentials");
                     if (!$db) {
                         echo "Error : Unable to open database\n";
                     }
                     $sql = <<<EOF
                        SELECT * from datadb order by starting_date desc;
EOF;
                     
                     $ret = pg_query($db, $sql);
                     if (!$ret) {
                         echo pg_last_error($db);
                         exit;
                     }
                     while ($data = pg_fetch_row($ret)) { //read each line as an array
                          if(!$valid){
                              echo "<thead>";
                                  echo "<th>Name</th>";
                                  echo "<th>Data Added</th>";
                                  echo "<th>ID</th>";
                                  echo "<th>Data</th>
                                </tr>
                              </thead>";
                          }
                          echo "<tr>";
                              echo "<td >$data[0] </td>";
                              echo "<td >$data[1] </td>";
                              echo "<td >$data[2] </td>";
                              echo "<td >$data[3] </td>";
                          echo "</tr>";
                          $valid = true;
                     }
                     pg_close($db);
                     ?>
               </tbody>
               </thead>
            </table>
            <?php if(!$valid){?>
            <h5 class="text-danger">*There are currently no data in our record!*</h5>
            <?php }?>
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