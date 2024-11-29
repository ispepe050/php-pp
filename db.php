<?php
$host = "localhost"; // URL o IP del servidor
$dbname = "demo_php";
$user = "root";
$password = "";
$port = "3306"; // 3306 (MySQL), 5432 (PostgreSQL)
$dsn = "mysql:host=$host;dbname=$dbname;port=$port";
$pdo = new PDO($dsn, $user, $password);