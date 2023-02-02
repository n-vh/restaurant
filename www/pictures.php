<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/vendor/bootstrap.min.js"></script>
  <title>Pictures – The Pet Plate</title>
</head>

<body class="d-flex flex-column vh-100">
  <!-- navbar -->
  <?php include("components/navbar.php"); ?>

  <!-- pictures -->
  <section class="container my-5">
    <div class="row gap-4 justify-content-center">
      <div class="d-flex justify-content-center">
        <h1 class="serif">Discover Our Creations</h1>
      </div>
      <div id="carousel" class="col-12 col-lg-10 carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row g-2 justify-content-center">
              <div class="col-10 col-md-8">
                <img class="w-100" src="assets/images/pictures-1.jpg" />
              </div>
              <div class="col-10 col-md-4">
                <div class="row g-2">
                  <div class="col-6 col-md-12">
                    <img class="w-100" src="assets/images/pictures-3.jpg" />
                  </div>
                  <div class="col-6 col-md-12">
                    <img class="w-100" src="assets/images/pictures-6.jpg" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row g-2 justify-content-center">
              <div class="col-10 col-md-8">
                <img class="w-100" src="assets/images/pictures-12.jpg" />
              </div>
              <div class="col-10 col-md-4">
                <div class="row g-2">
                  <div class="col-6 col-md-12">
                    <img class="w-100" src="assets/images/pictures-4.jpg" />
                  </div>
                  <div class="col-6 col-md-12">
                    <img class="w-100" src="assets/images/pictures-8.jpg" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row g-2 justify-content-center">
              <div class="col-10 col-md-8">
                <img class="w-100" src="assets/images/pictures-13.jpg" />
              </div>
              <div class="col-10 col-md-4">
                <div class="row g-2">
                  <div class="col-6 col-md-12">
                    <img class="w-100" src="assets/images/pictures-5.jpg" />
                  </div>
                  <div class="col-6 col-md-12">
                    <img class="w-100" src="assets/images/pictures-10.jpg" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row g-2 justify-content-center">
              <div class="col-10 col-md-8">
                <img class="w-100" src="assets/images/pictures-7.jpg" />
              </div>
              <div class="col-10 col-md-4">
                <div class="row g-2">
                  <div class="col-6 col-md-12">
                    <img class="w-100" src="assets/images/pictures-9.jpg" />
                  </div>
                  <div class="col-6 col-md-12">
                    <img class="w-100" src="assets/images/pictures-11.jpg" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pagination justify-content-center mb-5">
        <li class="page-item">
          <button class="page-link" data-bs-target="#carousel" data-bs-slide="prev">
            Previous
          </button>
        </li>
        <li class="page-item">
          <button class="page-link" data-bs-target="#carousel" data-bs-slide-to="0">
            1
          </button>
        </li>
        <li class="page-item">
          <button class="page-link" data-bs-target="#carousel" data-bs-slide-to="1">
            2
          </button>
        </li>
        <li class="page-item">
          <button class="page-link" data-bs-target="#carousel" data-bs-slide-to="2">
            3
          </button>
        </li>
        <li class="page-item">
          <button class="page-link" data-bs-target="#carousel" data-bs-slide-to="3">
            4
          </button>
        </li>
        <li class="page-item">
          <button class="page-link" data-bs-target="#carousel" data-bs-slide="next">
            Next
          </button>
        </li>
      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include("components/footer.php"); ?>
</body>

</html>