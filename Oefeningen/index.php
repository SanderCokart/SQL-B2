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
    <body><center>
<div id="forms">
    <div id="insert">
        <form action="includes/submit.inc.php" method="POST">
            <input type="text" name="songName"placeholder="Song Name">
            <br>
            <input type="text" name="artistName"placeholder="Artist Name">
            <br>
            <button type="submit" name="submit">INSERT</button>
        </form>
    </div>
    <div id="edit">
        <form action="includes/edit.inc.php" method="POST">
            <input type="text" name="id"placeholder="ID">
            <br>
            <input type="text" name="songName"placeholder="Song Name">
            <br>
            <input type="text" name="artistName"placeholder="Artist Name">
            <br>
            <button type="submit" name="submit">EDIT</button>
        </form>
    </div>

            <!-- FORM TO DELETE -->
    <div id="remove">
        <form action="includes/remove.inc.php" method="POST">
            <input type="number" name="id" placeholder="ID">
            <br>
            <button type="submit" name="submit">REMOVE</button>
        </form>
    </div>
</div>
            <br><br>

            <h1>Song List</h1>

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
                          echo $row['ID']."<br>";
                          echo "</td><td>";
                          echo $row['Title'];
                          echo "</td><td>";
                          echo $row['Artist'];
                          echo "</td></tr>";
                      }

                      echo "</table><br><br>";
        ?>

        <h1><a href="verlanglijst.php">verlanglijst</h1>

    </body>
</html>
