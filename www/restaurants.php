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
  <title>Restaurants – The Pet Plate</title>
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
            <a class="nav-link active" href="restaurants.php">Restaurants</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-contact" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- restaurants -->
  <section class="container">
    <div class="row justify-content-center my-4">
      <div class="d-flex justify-content-center my-4">
        <h1 class="serif">Our Locations</h1>
      </div>
      <div class="col-12 col-md-10 col-lg-7 col-xl-6 mb-3 mb-lg-0">
        <div id="map" class="ratio ratio-1x1 rounded"></div>
      </div>
      <div class="col-12 col-md-7 col-lg-5 col-xl-4">
        <ol class="list-group">
          <button class="list-group-item d-flex justify-content-between text-start map-button"
            onclick="locations.brussels.open()">
            <div class="ms-2">
              <div class="fw-bold">Brussels</div>
              <small class="text-muted">
                Rue du Cirque 1 <br />
                1000 Brussels <br />
                +32 2 542 23 32
              </small>
            </div>
            <div class="ms-2">
              <small class="fw-bold">Opening Hours</small><br />
              <small class="text-muted">
                Mon-Sat: 12:00-22:00 <br />
                Sun: Closed <br />
              </small>
            </div>
          </button>
          <button class="list-group-item d-flex justify-content-between text-start map-button"
            onclick="locations.ghent.open()">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Ghent</div>
              <small class="text-muted">
                Zebrastraat 1 <br />
                9000 Ghent <br />
                +32 2 542 23 32
              </small>
            </div>
            <div class="ms-2">
              <small class="fw-bold">Opening Hours</small><br />
              <small class="text-muted">
                Mon-Thu: 12:00-22:00 <br />
                Fri-Sat: 14:00-23:00 <br />
                Sun: Closed <br />
              </small>
            </div>
          </button>
          <button class="list-group-item d-flex justify-content-between text-start map-button"
            onclick="locations.antwerp.open()">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Antwerp</div>
              <small class="text-muted">
                Koningin Astridplein 1 <br />
                2018 Antwerp <br />
                +32 2 542 23 32
              </small>
            </div>
            <div class="ms-2">
              <small class="fw-bold">Opening Hours</small><br />
              <small class="text-muted">
                Mon-Thu: 12:00-22:00 <br />
                Fri-Sat: 14:00-23:00 <br />
                Sun: Closed <br />
              </small>
            </div>
          </button>
          <button class="list-group-item d-flex justify-content-between text-start map-button"
            onclick="locations.rotterdam.open()">
            <div class="ms-2 me-auto">
              <div class="fw-bold">Rotterdam</div>
              <small class="text-muted">
                Stationsplein 45<br />
                3013 Rotterdam<br />
                +31 71 969 2772
              </small>
            </div>
            <div class="ms-2">
              <small class="fw-bold">Opening Hours</small><br />
              <small class="text-muted">Mon-Sun: 12:00-22:00</small>
            </div>
          </button>
        </ol>
      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include("components/footer.php"); ?>

  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDDHu_t8VjfZ8JUWdw2QPEV1rQrECGF_os&callback=initMap&v=weekly"
    defer></script>
</body>

</html>