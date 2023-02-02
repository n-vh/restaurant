<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/vendor/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/vendor/bootstrap.min.js"></script>
  <title>Menu – The Pet Plate</title>
</head>

<body class="d-flex flex-column vh-100">
  <!-- navbar -->
  <?php include("components/navbar.php"); ?>

  <!-- menu -->
  <section class="container my-5">
    <div class="row gap-4 justify-content-center">
      <div class="d-flex justify-content-center">
        <h1 class="serif">The Menu</h1>
      </div>
      <div class="col-12 col-lg-8">
        <h3 class="serif">Appetizers</h3>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-start p-3 gap-3">
            <div class="ms-2 me-auto">
              <div class="fw-bold mb-1">Chicken and chaga mushroom soup</div>
              A chicken bone broth made with whole Pasture Bird chicken, simmered with
              organic unfiltered apple cider vinegar for 8 hours then infused with
              organic chaga mushrooms.
            </div>
            <span class="badge bg-primary rounded-pill fs-6">12€</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start p-3 gap-3">
            <div class="ms-2 me-auto">
              <div class="fw-bold mb-1">Chicken skin waffle and charcoal flan</div>
              A coconut charcoal custard topped with a delicate savory waffle, organic
              pastured chicken skin and organic ground cassava.
            </div>
            <span class="badge bg-primary rounded-pill fs-6">11€</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start p-3 gap-3">
            <div class="ms-2 me-auto">
              <div class="fw-bold mb-1">Grass fed steak tartare</div>
              Hand cut pasture raised grass fed fillet mignon, dressed with quail egg
              and organic broccoli sprouts.
            </div>
            <span class="badge bg-primary rounded-pill fs-6">16€</span>
          </li>
        </ul>
      </div>
      <div class="col-12 col-lg-8">
        <h3 class="serif">Main Menu</h3>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-start p-3 gap-3">
            <div class="ms-2 me-auto">
              <div class="fw-bold mb-1">Mushroom and truffle pasta</div>
              A pasta dish made with a creamy mushroom and truffle sauce, topped with
              shaved Parmesan cheese.
            </div>
            <span class="badge bg-primary rounded-pill fs-6">28€</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start p-3 gap-3">
            <div class="ms-2 me-auto">
              <div class="fw-bold mb-1">Seared duck breast</div>
              A pan-seared duck breast served with a cherry reduction and a side of
              braised greens.
            </div>
            <span class="badge bg-primary rounded-pill fs-6">32€</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start p-3 gap-3">
            <div class="ms-2 me-auto">
              <div class="fw-bold mb-1">Eggplant parmesan</div>
              Breaded and fried eggplant slices served with a tomato-basil sauce and
              mozzarella cheese, baked until bubbly and golden brown.
            </div>
            <span class="badge bg-primary rounded-pill fs-6">23€</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start p-3 gap-3">
            <div class="ms-2 me-auto">
              <div class="fw-bold mb-1">Pan-seared salmon</div>
              Wild-caught salmon served with a lemon-dill sauce and a side of quinoa and
              steamed vegetables.
            </div>
            <span class="badge bg-primary rounded-pill fs-6">43€</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start p-3 gap-3">
            <div class="ms-2 me-auto">
              <div class="fw-bold mb-1">Lamb chops</div>
              Grilled lamb chops served with a mint pesto and a side of mashed sweet
              potatoes.
            </div>
            <span class="badge bg-primary rounded-pill fs-6">34€</span>
          </li>
        </ul>
      </div>
      <div class="col-12 col-lg-8">
        <h3 class="serif">Beverage</h3>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-start p-3 gap-3">
            <div class="ms-2 me-auto">
              <div class="fw-bold mb-1">Flat water</div>
              The most important drink will be served in a bowl with a straw.
            </div>
            <span class="badge bg-primary rounded-pill fs-6">1€</span>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- footer -->
  <?php include("components/footer.php"); ?>
</body>

</html>