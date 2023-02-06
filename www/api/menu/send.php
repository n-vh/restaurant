<?php
include_once('../../includes/database.php');

if (isset($_POST['category']) && isset($_POST['title']) && isset($_POST['description']) && isset($_POST['price'])) {
  $params = array(
    "category" => $_POST["category"],
    "title" => $_POST["title"],
    "description" => $_POST["description"],
    "price" => $_POST["price"]
  );

  $q = $conn->prepare("INSERT INTO menu (category, title, description, price) VALUES (:category, :title, :description, :price)");

  $q->bindParam(':category', $params["category"]);
  $q->bindParam(':title', $params["title"]);
  $q->bindParam(':description', $params["description"]);
  $q->bindParam(':price', $params["price"]);
  $q->execute();
  echo "successful";
}
?>