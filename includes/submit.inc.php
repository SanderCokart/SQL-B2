<?php
include_once 'db.inc.php';

// DEFINES title & artist from HTML form
$title = $_POST['songName'];
$artist = $_POST['artistName'];

if ($artist != "" && $title != "") {
// INSERTING DATA INTO TABLE songs
$sql = "INSERT INTO songs (Title, Artist) VALUES ('$title', '$artist');";
mysqli_query($conn, $sql);
}

// RETURNS USER TO FRONT PAGE
header("Location: ../index.php?submit=succes");
$conn->close();
