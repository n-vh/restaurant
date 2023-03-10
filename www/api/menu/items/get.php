<?php
include_once('../../../includes/database.php');

if (isset($_GET["category"])) {
  $category = $_GET["category"];
  $req = $conn->prepare("SELECT * FROM menu WHERE category = :category AND deleted_at IS NULL");
  $req->bindParam(':category', $category);
  $req->execute();
  $categories_items = $req->fetchAll(PDO::FETCH_ASSOC);
  echo json_encode($categories_items);
} else {
  echo json_encode(
    array(
      "error" => "missing parameters"
    )
  );
}
?>