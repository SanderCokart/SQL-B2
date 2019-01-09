<?php
      include_once 'includes/db.inc.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/master.css">
        <title>opdr1</title>
    </head>
    <body>
        <center><h1>Songs</h1>

        <?php
              $sqlget = "SELECT * FROM songs;";
              $sqldata = mysqli_query($conn, $sqlget) or die('error getting the data');

                      echo "<table width=200px>";
                      echo "<tr><th>ID</th><th>Title</th><th>Artist</th>";

                      while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
                          echo "<tr><td>";
                          echo $row['ID'];
                          echo "</td><td>";
                          echo $row['Title'];
                          echo "</td><td>";
                          echo $row['Artist'];
                          echo "</td></tr>";
                      }
          ?>

    </body>
</html>
