<?php
$host = getenv('MYSQL_HOST');
$dbname = getenv('MYSQL_DATABASE');
$username = getenv('MYSQL_ROOT_USER');
$password = getenv('MYSQL_ROOT_PASSWORD');

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>