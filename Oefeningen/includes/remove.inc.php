<?php
include_once 'db.inc.php';

$id = $_POST['id'];

if (isset($id)) {
    $sql = "DELETE FROM `songs` WHERE ID = '$id';";
    mysqli_query($conn, $sql);
    }

    $conn->close();
    header("Location: ../index.php?submit=succes");
