<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "mydb2";

    $connect = mysqli_connect($servername, $username, $password, $database);

    if (!$connect) {
        die("Error de conexión: " . mysqli_connect_error());
    }
?>