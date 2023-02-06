<?php
include_once('../../../includes/database.php');

$req = $conn->prepare("SELECT * FROM menu_categories");
$req->execute();
$categories = $req->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($categories);
?>