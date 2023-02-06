<?php
include('../../includes/database.php');

$req = $conn->prepare("SELECT * FROM contact WHERE deleted_at IS NULL");
$req->execute();
$pictures = $req->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($pictures);
?>