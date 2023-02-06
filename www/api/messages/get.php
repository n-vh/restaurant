<?php
include('../../includes/database.php');

$req = $conn->prepare("SELECT * FROM contact");
$req->execute();
$pictures = $req->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($pictures);
?>