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

        <center><form action="includes/submit.inc.php" method="POST">
            <input type="text" name="songName"placeholder="Song Name">
            <br>
            <input type="text" name="artistName"placeholder="Artist Name">
            <br>
            <button type="submit" name="submit">Send</button>
        </form></center>

        <center><h1>Song List</h1>
        <!-- database listings -->
        <?php
              $sqlget = "SELECT * FROM songs;";
              $sqldata = mysqli_query($conn, $sqlget) or die('error getting the data');

                    // CREATES A TABLE
                      echo "<table width=25%>";
                      echo "<tr><th>ID</th><th>Title</th><th>Artist</th>";

                      // STARTS A LOOP THAT RUNS FOR AS LONG AS THERE IS DATA AND SPITS OUT DATABASE DATA
                      while($row = mysqli_fetch_assoc($sqldata)){
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
