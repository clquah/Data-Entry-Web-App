<?php
echo  '<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark rounded">
      <a class="navbar-brand" href="dataentry.php">CompanyXYZ</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="display.php">Record</a>
          </li>
          <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" id="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
	        <div class="dropdown-menu" aria-labelledby="dropdown">
	          <a class="dropdown-item" href="changesinput.php">Change data</a>
	        </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adminsettings.php">Admin</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0" action="datasearch.php" method="POST">
            <input type="text" class="form-control" name="id" id="inputID" placeholder="Search by ID">
        </form>
      </div>
    </nav>';
?>