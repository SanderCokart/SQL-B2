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
         <h1 class="header">Birthdays</h1>

         <?php
         echo
        "<table>
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
              $time = getTime($row['birthDay']);

              echo "</td><td>";
              echo "$age";
              echo "</td><td>";
              echo "$time";
              echo "</td></tr>";
          }
          echo "</table>";


          ?>
      <div class="operationContainer">
        <div  class="insert">
        <h1 class="operations">INSERT</h1>
            <form class="insertForm" action="includes/insert.inc.php" method="POST">
                <input type="text" name="firstName" placeholder="First Name">

                <input type="text" name="lastName" placeholder="Last Name">

                <input type="date" name="birthDay" placeholder="Birthday">
                <input class="submit" type="submit" name="submit">
            </form>
        </div>
        <div  class = "edit">
        <h1 class="operations">EDIT</h1>
            <form class="editForm" action="includes/edit.inc.php" method="POST">
                <input type="number" name="ID" placeholder="ID">

                <input type="text" name="firstName" placeholder="First Name">

                <input type="text" name="lastName" placeholder="Last Name">

                <input type="date" name="birthDay" placeholder="Birthday">
                <input class="submit" type="submit" name="submit">
            </form>
        </div>
        <div  class = "remove">
        <h1 class="operations">REMOVE</h1>
            <form class="removeForm" action="includes/remove.inc.php" method="POST">
                <input type="number" name="ID" placeholder="ID">
                <input class="submit" type="submit" name="submit">
            </form>
        </div>
    </div>


     </body>
 </html>
