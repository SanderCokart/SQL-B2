<?php
include_once 'db.inc.php';

$id = $_POST['id'];
$artistName = $_POST['artistName'];
$songName = $_POST['songName'];

$sql = "UPDATE songs
SET Artist = '$artistName', Title = '$songName'
WHERE ID = '$id';";

if (isset($id,$artistName,$songName)) {
    mysqli_query($conn, $sql);
}
$conn->close();
header("Location: ../index.php?submit=succes");
