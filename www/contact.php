<?php
include("includes/query.php");

$first_name = $last_name = $subject = $message = "";
$successful = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // @@@ SANITIZE INPUT @@@
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $query = array(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'subject' => $subject,
    'message' => $message
  );

  $response = post_query("http://localhost/api/contact/send.php", $query);
  $successful = $response == "successful";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/vendor/bootstrap.min.js"></script>
  <script src="assets/script.js"></script>
  <title>Contact – The Pet Plate</title>
</head>

<body class="d-flex flex-column vh-100">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg sticky-top bg-white py-3">
    <div class="container">
      <img class="mx-2" src="assets/images/logo.svg" height="38" width="56" />
      <a class="navbar-brand m-0 logo serif" href="index.php">The Pet Plate<b>.</b></a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#hamburger">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse text-center justify-content-end" id="hamburger">
        <ul class="navbar-nav gap-2 mb-2 mb-md-0 mt-3 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pictures.php">Pictures</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="restaurants.php">Restaurants</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-contact" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- contact -->
  <section class="container my-5">
    <div class="row gap-4 justify-content-center">
      <div class="d-flex justify-content-center">
        <h1 class="serif">Do you have any question?</h1>
      </div>
      <section class="card col-10 col-md-8 col-lg-6">
        <form class="row g-3 p-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="col-md-6">
            <label for="form-first-name" class="form-label">First Name</label>
            <input id="form-first-name" class="form-control" type="text" name="first_name"
              value="<? echo $first_name ?>" required />
          </div>
          <div class="col-md-6">
            <label for="form-last-name" class="form-label">Last Name</label>
            <input id="form-last-name" class="form-control" type="text" name="last_name" value="<? echo $last_name ?>"
              required />
          </div>
          <div class="col-md-12">
            <label for="form-subject" class="form-label">Subject</label>
            <select id="form-subject" class="form-select" name="subject" required>
              <option selected disabled value="">Choose...</option>
              <!-- @@@ LOOP OPTIONS @@@ -->
              <option <? echo $subject === "Reservation request" ? "selected" : "" ?>>Reservation request</option>
              <option <? echo $subject === "Inquiry about private events" ? "selected" : "" ?>>Inquiry about private
                events</option>
              <option <? echo $subject === "Suggestions for menu items" ? "selected" : "" ?>>Suggestions for menu items
              </option>
              <option <? echo $subject === "Questions about offers or events" ? "selected" : "" ?>>Questions about offers
                or events</option>
              <option <? echo $subject === "General question or comment" ? "selected" : "" ?>>General question or comment
              </option>
            </select>
          </div>
          <div class="col-md-12">
            <label for="form-message" class="form-label">Message</label>
            <input id="form-message" class="form-control" type="text" name="message" value="<? echo $message ?>"
              required />
          </div>
          <div class="col-12">
            <button class="btn btn-contact" type="submit">Submit</button>
          </div>
          <?php
          if ($successful) {
            echo "<div class='alert alert-success' role='alert'>Message sent!<br> We will get back to you as soon as possible.</div>";
          }
          ?>
        </form>
      </section>
    </div>
  </section>

  <!-- footer -->
  <footer class="text-center py-4 bg-white mt-auto">
    <a class="btn btn-link btn-floating btn-lg text-dark">
      <i class="fab fa-facebook-f"> </i>
    </a>
    <a class="btn btn-link btn-floating btn-lg text-dark">
      <i class="fab fa-twitter"> </i>
    </a>
    <a class="btn btn-link btn-floating btn-lg text-dark">
      <i class="fab fa-instagram"> </i>
    </a>
    <section class="my-2">
      © 2022 Copyright | <a class="text-dark serif" href="index.php">The Pet Plate</a>
    </section>
  </footer>
</body>

</html>