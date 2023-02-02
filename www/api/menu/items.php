<?php
include('../../includes/database.php');

if (isset($_GET["category"])) {
  $category = $_GET["category"];
  $req = $conn->prepare("SELECT * FROM menu WHERE category = :category");
  $req->bindParam(':category', $category);
  $req->execute();
  $categories_items = $req->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($categories_items);
}
?>