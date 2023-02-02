<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/vendor/bootstrap.min.js"></script>
  <title>Home – The Pet Plate</title>
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
        <ul class="navbar-nav gap-2 mb-2 mb-lg-0 mt-3 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
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

  <!-- jumbotron -->
  <section class="jumbotron d-flex align-items-center text-light">
    <div class="container">
      <div
        class="d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
        <h2>
          Welcome to <span class="fs-1 serif">The Pet Plate<b>.</b></span>
        </h2>
        <p>
          Experience the delicious and creative dishes that made is a popular choice
          among foodies in the community.
        </p>
        <p>Visit us today to see what all the buzz is about!</p>
        <a href="menu.php" class="btn-contact">Discover the Menu</a>
      </div>
    </div>
  </section>

  <!-- offers & events -->
  <section class="container my-5">
    <div class="row justify-content-center">
      <!-- offers -->
      <div class="col-10 col-md-6 col-lg-4">
        <h2 class="serif">Offers</h2>
        <div class="card">
          <img src="assets/images/offers.jpg" class="card-img-top" />
          <div class="card-body">
            <h5 class="card-title">Today's Offer</h5>
            <p class="card-text">
              We are offering a <b>10% discount</b> on all of our dishes! Stop by and
              treat yourself to a tasty meal at a great price!
            </p>
            <a href="menu.php" class="btn-contact">Menu</a>
          </div>
        </div>
      </div>

      <!-- events -->
      <div class="col-10 col-md-10 col-lg-8 mt-4 mt-lg-0">
        <h2 class="serif">Events</h2>
        <div class="card-group">
          <div class="card">
            <img src="assets/images/events-1.jpg" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Puppy Cooking</h5>
              <p class="card-text">
                We are hosting a cooking class led by our professional labrador chef
                Charlie, where participants learn how to make homemade dog meals!
              </p>
            </div>
          </div>
          <div class="card">
            <img src="assets/images/events-2.jpg" class="card-img-top" />
            <div class="card-body">
              <h5 class="card-title">Yappy Hour</h5>
              <p class="card-text">
                This event offers discounted food and drinks for pets and their owners,
                and is a great way to bring people together and have some fun with their
                pets.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include("footer.php"); ?>
</body>

</html>