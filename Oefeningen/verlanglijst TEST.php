<?php
include_once 'db.inc.php';
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


 ?>

	<div id="container">

		<p class="tekst"> container </p>

		<div class="blok">
			<p class="tekst"> Blok1 </p>

			<div class="bloktekst">
				<p class="tekst"> Blok1Tekst </p>
			</div>

			<div class="blokimage">
				<p class="tekst"> Blok1Image </p>
			</div>

		</div>


</body>

</html>
