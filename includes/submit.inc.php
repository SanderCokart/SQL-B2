<?php
include_once 'db.inc.php';

// DEFINES title & artist from HTML form
$title = $_POST['songName'];
$artist = $_POST['artistName'];
$delete = $_POST['deleteButton'];

if ($artist != "" && $title != "") {
// INSERTING DATA INTO TABLE songs
$sql = "INSERT INTO songs (Title, Artist) VALUES ('$title', '$artist');";
mysqli_query($conn, $sql);

// RESETS AUTO_INCREMENT
$sql_resetAI = "SET @autoid := 0;
UPDATE songs set ID = @autoid := (@autoid+1);
ALTER table songs AUTO_INCREMENT = 1;";
mysqli_query($conn,$sql_resetAI);

}

// RETURNS USER TO FRONT PAGE
header("Location: ../index.php?submit=succes");
 ?>
