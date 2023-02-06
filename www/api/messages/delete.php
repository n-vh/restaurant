<?php
include('../../includes/database.php');

if (isset($_POST['id'])) {
  $q = $conn->prepare("UPDATE contact SET deleted_at = NOW() WHERE id = :id AND deleted_at IS NULL");
  $q->bindParam(':id', $_POST['id']);
  $q->execute();
  echo "successful";
}
?>