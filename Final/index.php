<?php
//includes the databse access as well as the functions to calculate age and time
include_once "includes/db.inc.php";
include_once "includes/functions.php";
 ?>

 <!DOCTYPE html>
 <!-- WEBSITE page that features a database of birthdays  -->
 <html lang="en" dir="ltr">
     <head>
         <link rel="stylesheet" href="css/master.css">
         <meta charset="utf-8">
         <title>verjaardagen</title>
     </head>
     <body>
         <h1 class="header">Birthdays</h1>

         <?php
         // CREATES the table headers
         echo"
         <div class=\"data\">
        <table>
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Birthday</th>
        <th>Age</th>
        <th>Your Time Here</th>";

        // MAKES an SQL request to show all data in verjaardagen table
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

              //using functions inside functions.inc.php to calculate time and age
              $age = getAge($row['birthDay']);
              $time = getTime($row['birthDay']).'<br><br>OR<br><br>'.getDays($row['birthDay']);

              echo "</td><td>";
              echo "$age";
              echo "</td><td>";
              echo "$time";
              echo "</td></tr>";
          }
          echo "</table>";
          // END of table
          ?>
      </div>

          <!-- STARTS the area to be used for the functions to edit the table -->
      <div class="operationContainer">
          <!-- DIV INSERT -->
        <div  class="insert">
        <h1 class="operations">INSERT</h1>
            <form class="insertForm" action="includes/insert.inc.php" method="POST">
                <input type="text" name="firstName" placeholder="First Name">

                <input type="text" name="lastName" placeholder="Last Name">

                <input type="date" name="birthDay" placeholder="Birthday">
                <input class="submit" type="submit" name="submit">
            </form>
        </div>
        <!-- DIV EDIT -->
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
        <!-- DIV REMOVE -->
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
