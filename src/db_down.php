<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 2016-12-21
 * Time: 17:46
 */

$servername = "localhost";
$username = "root";
$password = "pass";


// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$drop = "DROP DATABASE psw";

if (mysqli_query($conn, $drop)) {
    echo "Baza danych usunieta";
} else {
    echo "Blad podczas usuwania BD " . mysqli_error($conn);
}

mysqli_close($conn);