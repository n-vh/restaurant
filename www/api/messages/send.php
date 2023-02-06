<?php
include_once('../../includes/database.php');

if (isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
  $params = array(
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'subject' => $_POST['subject'],
    'message' => $_POST['message']
  );

  $q = $conn->prepare("INSERT INTO contact (first_name, last_name, email, subject, message) VALUES (:first_name, :last_name, :email, :subject, :message)");

  $q->bindParam(':first_name', $params["first_name"]);
  $q->bindParam(':last_name', $params["last_name"]);
  $q->bindParam(':email', $params["email"]);
  $q->bindParam(':subject', $params["subject"]);
  $q->bindParam(':message', $params["message"]);
  $q->execute();
  echo "successful";
}
?>