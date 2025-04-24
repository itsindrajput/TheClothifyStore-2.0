<?php
$host = "localhost";
$user = "root";
$pass = ""; 
$dbname = "user_system";

// Connect to MySQL
$conn = new mysqli($host, $user, $pass);

// Create database if not exists
$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);

// Create users table
$conn->query("
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) UNIQUE NOT NULL,
        password VARCHAR(255) NOT NULL
    )
");
?>
