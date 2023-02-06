<?php
include('../../includes/database.php');

if (isset($_POST['id'])) {
  $q = $conn->prepare("DELETE FROM contact WHERE id = :id");
  $q->bindParam(':id', $_POST['id']);
  $q->execute();
  echo "successful";
}
?>