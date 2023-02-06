<?php
include_once('../../includes/database.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
  $username = htmlspecialchars($_POST['username']);
  $password = $_POST['password'];

  try {
    $req = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $req->bindParam(':username', $username);
    $req->bindParam(':password', $password);
    $req->execute();
    $admin = $req->fetch(PDO::FETCH_ASSOC);

    if ($admin) {
      echo json_encode($admin);
      exit;
    }
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
}

echo json_encode(
  array(
    'error' => 'Invalid username or password'
  )
);
?>