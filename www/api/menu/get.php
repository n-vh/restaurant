<?php
include_once('../../includes/database.php');

$req = $conn->prepare("SELECT m.id, m.category, m.title, m.description, m.price, c.display_name FROM menu m, menu_categories c WHERE m.category = c.id AND m.deleted_at IS NULL;");
$req->execute();
$menu = $req->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($menu);
?>