<?php
include_once 'db.inc.php';

// DEFINES title & artist from HTML form
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$birthDay = $_POST['birthDay'];

if (isset($firstName)&&isset($lastName)&&isset($birthDay)) {
// INSERTING DATA INTO TABLE songs
$sql = "INSERT INTO verjaardagen (firstName, lastName, birthDay) VALUES ('$firstName', '$lastName', '$birthDay');";
mysqli_query($conn, $sql);
}

// RETURNS USER TO FRONT PAGE
header("Location: ../index.php?submit=succes");
$conn->close();
