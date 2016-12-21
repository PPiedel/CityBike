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

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$createDatabase = "CREATE DATABASE psw";
if (mysqli_query($conn, $createDatabase)) {
    echo "Baza danych utworzona pomyslnie";
} else {
    echo "Blad podczas tworzenia BD: " . mysqli_error($conn);
}

//create table users
$createTable = "CREATE TABLE Users (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
login VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL
)";

if (mysqli_query($conn, $createTable)) {
    echo "Tabela users utworzona";
} else {
    echo "Blad podczas tworzenia tabeli " . mysqli_error($conn);
}

//insert values
$sql = "INSERT INTO psw (login,password)
VALUES ('Pawel', '123');";
$sql .= "INSERT INTO psw (login,password)
VALUES ('Ernest', '567');";

if (mysqli_query($conn, $sql)) {
    echo "Rekordy utworzone pomyslnie";
} else {
    echo "Blad: " . $insertRecords . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);