<?php

include_once 'db.inc.php';

$ID = $_POST['ID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthDay = $_POST['birthDay'];

$sql = "UPDATE `verjaardagen` SET firstName = '$firstName', lastName = '$lastName', birthDay = '$birthDay' WHERE ID = '$ID';";

if (isset($ID)) {
    mysqli_query($conn, $sql);
}

header("Location: ../index.php?submit=succes");
