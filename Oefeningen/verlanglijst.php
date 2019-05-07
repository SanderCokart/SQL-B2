<?php
include_once 'includes/db.inc.php';
 ?>


 <!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>DEMO</title>
  <meta name="description" content="Demo">
  <meta name="S.Lanting" content="Informatief">

  <link rel="stylesheet" href="css/styles.css">

</head>

<body>

<?php
$sqlget2 = "SELECT * FROM verlanglijst;";
$sqldata2 = mysqli_query($conn, $sqlget2) or die ('error getting the data');

// STARTS A LOOP THAT RUNS FOR AS LONG AS THERE IS DATA AND SPITS OUT DATABASE DATA
echo "<div id =\"container\">";
while($row = mysqli_fetch_assoc($sqldata2)){

    echo "<div class =\"blok\">";
    echo "<a href=".$row['Source']."><h1 class=\"productName\"> $row[Product] </h1></a>";
    echo "<div class=\"bloktekst\">";
    echo "<p> $row[Description] </p>";
    echo "</div>";
    echo "<div class=\"blokimage\">";
    echo "<a href = ".$row['Source']."><img src=".$row['image']." alt=\"IMAGE\"></a>";
    echo "<div class = \"price\">";
    echo "<p class = \"h2price\">€".$row['Price'].",-</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}
echo "</div>";
 ?>

    <!-- <div id="container">

		<p class="tekst"> container </p>

		<div class="blok">
			<p class="tekst"> Blok1 </p>

			<div class="bloktekst">
				<p class="tekst"> Blok1Tekst </p>
			</div>

			<div class="blokimage">
				<p class="tekst"> Blok1Image </p>
			</div>

		</div> -->


</body>

</html>
