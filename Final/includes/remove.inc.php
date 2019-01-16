<?php
include_once 'db.inc.php';

$id = $_POST['ID'];

if (isset($id)) {
    $sql = "DELETE FROM `verjaardagen` WHERE ID = '$id';";
    mysqli_query($conn, $sql);
}

header("Location: ../index.php?submit=succes");
$conn->close();
