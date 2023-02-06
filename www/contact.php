<?php
include("includes/query.php");

$first_name = $last_name = $subject = $message = "";
$first_name = $last_name = $email = $subject = $message = "";
$successful = false;
$form_options = array(
  "Reservation request",
  "Inquiry about private events",
  "Suggestions for menu items",
  "Questions about offers or events",
  "General question or comment",
  "Other"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // @@@ SANITIZE INPUT @@@
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $query = array(
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
    'subject' => $subject,
    'message' => $message
  );

  $response = post_query("http://localhost/api/messages/send.php", $query);
  $successful = $response == "successful";
}
?>

<?php
$head_title = "Contact";
include_once("components/header.php");
?>

<body class="d-flex flex-column vh-100 background">
  <!-- navbar -->
  <?php include("components/navbar.php"); ?>

  <!-- contact -->
  <section class="container my-5">
    <div class="row gap-4 justify-content-center">
      <div class="d-flex justify-content-center">
        <h1 class="serif">Do you have any question?</h1>
      </div>
      <section class="card col-10 col-md-8 col-lg-6">
        <form class="row g-3 p-3" action="<? echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
            <label for="form-email" class="form-label">Email</label>
            <input id="form-email" class="form-control" type="email" name="email" value="<? echo $email ?>" required />
          </div>
          <div class="col-md-12">
            <label for="form-subject" class="form-label">Subject</label>
            <select id="form-subject" class="form-select" name="subject" required>
              <option selected disabled value="">Choose...</option>
              <?php
              foreach ($form_options as $option) {
                $selected = $option === $subject ? "selected" : "";
                echo "<option value='$option' $selected >$option</option>";
              }
              ?>
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
            echo <<<HTML
              <div class='alert alert-success' role='alert'>
                Message sent!<br> 
                We will get back to you as soon as possible.
              </div>
            HTML;
          } ?>
        </form>
      </section>
    </div>
  </section>

  <!-- footer -->
  <?php include("components/footer.php"); ?>
</body>

</html>