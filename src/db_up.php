<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 2016-12-21
 * Time: 17:24
 */

$servername = "localhost";
$username = "root";
$password = "pass";
$database_name = "psw";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Create database
$createDatabase = "CREATE DATABASE IF NOT EXISTS  $database_name";
if (mysqli_query($conn, $createDatabase)) {
    echo "Baza danych utworzona pomyslnie<br>";
} else {
    echo "Blad podczas tworzenia BD: " . mysqli_error($conn);
}

$db_select = mysqli_select_db($conn,$database_name);
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($conn));
}

//create table users
$createTable = "CREATE TABLE IN NOT EXISTS Users (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
login VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $createTable)) {
    echo "Tabela users utworzona";
} else {
    echo "Blad podczas tworzenia tabeli: " . mysqli_error($conn)."<br>";
}

//insert values
$sql = "INSERT INTO Users (login,password) VALUES('Pawel','123');";

if (mysqli_query($conn, $sql)) {
    echo "Rekordy utworzone pomyslnie";
} else {
    echo "Blad: " . $sql . "<br>" . mysqli_error($conn)."<br>";
}

mysqli_close($conn);