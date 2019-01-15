<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/verlanglijst.css">
        <title>verlanglijst</title>
    </head>
    <body>
        <?php
            include_once "includes/db.inc.php";
         ?>
        <?php
        $sqlget2 = "SELECT * FROM verlanglijst;";
        $sqldata2 = mysqli_query($conn, $sqlget2) or die ('error getting the data');

        // STARTS A LOOP THAT RUNS FOR AS LONG AS THERE IS DATA AND SPITS OUT DATABASE DATA
        while($row = mysqli_fetch_assoc($sqldata2)){

            echo "<div id = \"productcontrainer\"><div id=\"data\"><br><div id = \"product\">";
            echo "<h1><a href = ".$row['Source'].">".$row['Product']."</a></h1><br>";
            echo "</div><div id =\"description\">";
            echo $row['Description']."</div>";
            echo "</div>";
            echo "<div id = \"image\">";
            echo "<img src=".$row['image']." alt=\"IMAGE\"></div></div>";
        }
        ?>
    </body>
</html>
