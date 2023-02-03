<?php
include("includes/database.php");
include("includes/query.php");

$request = get_query("http://localhost/api/pictures/get.php", array());
$pictures = json_decode($request, true);
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
  <title>Pictures – The Pet Plate</title>
</head>

<body class="d-flex flex-column vh-100 background">
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
          <?php
            for ($i = 0; $i < count($pictures); $i += 3) {
              $active = $i === 0 ? "active" : "";
              echo <<<HTML
                <div class="carousel-item $active">
                  <div class="row g-2 justify-content-center">
                    <div class="col-10 col-md-8">
                      <img class="w-100" src="{$pictures[$i]['url']}" />
                    </div>
                    <div class="col-10 col-md-4">
                      <div class="row g-2">
                        <div class="col-6 col-md-12">
                          <img class="w-100" src="{$pictures[$i + 1]['url']}" />
                        </div>
                        <div class="col-6 col-md-12">
                          <img class="w-100" src="{$pictures[$i + 2]['url']}" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              HTML;
            }
          ?>
        </div>
      </div>
      <div class="pagination justify-content-center mb-5">
        <li class="page-item">
          <button class="page-link" data-bs-target="#carousel" data-bs-slide="prev">
            Previous
          </button>
        </li>
        <?php
            $page = 0;
            for ($i = 0; $i < count($pictures); $i += 3) {
              $number = $page + 1;
              echo <<<HTML
                <li class="page-item">
                  <button class="page-link" data-bs-target="#carousel" data-bs-slide-to="{$page}">
                    {$number}
                  </button>
                </li>
              HTML;
              $page += 1;
            }
          ?>
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