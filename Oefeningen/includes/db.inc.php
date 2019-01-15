<?php
function checkConn(){
    if ($conn->connect_error) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
}

    $servername = "localhost";
    $databasename = "db_level2_opdr1";
    $username = "sandercokart";
    $password = "sander123";

    $conn = mysqli_connect($servername, $username, $password, $databasename);

// checkConn();

?>
