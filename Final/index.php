<?php
include_once "includes/db.inc.php";
include_once "includes/functions.php";
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <link rel="stylesheet" href="css/master.css">
         <meta charset="utf-8">
         <title>verjaardagen</title>
     </head>
     <body>
         <h1>Birthdays</h1>

         <?php
         echo
        "<table width=50% border=\"solid\">;
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Birthday</th>
        <th>Age</th>
        <th>Your Time Here</th>";


        $sqlget = "SELECT * FROM verjaardagen;";
        $sqldata = mysqli_query($conn, $sqlget) or die('error getting the data');

          while ($row = mysqli_fetch_assoc($sqldata)) {
              echo "<tr><td>";
              echo $row['ID']."<br>";
              echo "</td><td>";
              echo $row['firstName'];
              echo "</td><td>";
              echo $row['lastName'];
              echo "</td><td>";
              echo $row['birthDay'];

              $age = getAge($row['birthDay']);
              $time = getTime();

              echo "</td><td>";
              echo "$age";
              echo "</td><td>";
              echo "$time";
              echo "</td></tr>";
          }
          ?>


     </body>
 </html>
