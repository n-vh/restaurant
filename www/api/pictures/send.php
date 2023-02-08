<?php
include_once('../../includes/database.php');

if (isset($_POST['id'])) {
  $params = array(
    "id" => $_POST['id'],
    "url" => $_POST['url']
  );

  $q = $conn->prepare("INSERT INTO pictures (id, url) VALUES (:id, :url) ON DUPLICATE KEY UPDATE url = :url, deleted_at = NULL");

  $q->bindParam(':id', $params["id"]);
  $q->bindParam(':url', $params["url"]);
  $q->execute();
  echo "successful";
}
?>