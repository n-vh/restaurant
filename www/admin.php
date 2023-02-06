<?php
include("includes/query.php");
session_start();

$show_dashboard = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
  $params = array(
    'username' => trim(htmlspecialchars($_POST['username'])),
    'password' => md5($_POST['password']),
  );

  $data = post_query("http://localhost/api/admin/get.php", $params);
  $admin = json_decode($data, true);

  if ($admin && !isset($admin['error'])) {
    $_SESSION['admin'] = $admin;
  }
}

if (isset($_SESSION['admin'])) {
  $show_dashboard = true;
}
?>

<?php
$head_title = "Admin";
include_once("components/header.php");
?>

<body class="d-flex flex-column vh-100">
  <?php
  include("components/navbar.php");

  if (!$show_dashboard) {
    include("components/login.php");
  } else {
    include("components/dashboard.php");
  }
  ?>
</body>

</html>