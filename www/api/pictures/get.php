<?php
include_once('../../includes/database.php');

$req = $conn->prepare("SELECT * FROM pictures");
$req->execute();
$pictures = $req->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($pictures);
?>