<?php
include_once("includes/database.php");
include_once("includes/query.php");

$request = get_query("http://localhost/api/menu/categories/get.php", array());
$categories = json_decode($request, true);
?>

<?php
$head_title = "Menu";
include_once("components/header.php");
?>

<body class="d-flex flex-column vh-100 background">
  <!-- navbar -->
  <?php include_once("components/navbar.php"); ?>

  <!-- menu -->
  <section class="container my-5">
    <div class="row gap-4 justify-content-center">
      <div class="d-flex justify-content-center">
        <h1 class="serif">The Menu</h1>
      </div>
        <?php
          foreach($categories as $category) {
            $items = get_query("http://localhost/api/menu/items/get.php", array("category" => $category["id"]));
            $items = json_decode($items, true);

            echo <<<HTML
              <div class="col-12 col-lg-8">
              <h3 class="serif">{$category["display_name"]}</h3>
              <ul class="list-group">
            HTML;

            foreach ($items as $item) {
              echo <<<HTML
                <li class="list-group-item d-flex justify-content-between align-items-start p-3 gap-3">
                  <div class="ms-2 me-auto">
                    <div class="fw-bold mb-1">{$item["title"]}</div>
                    {$item["description"]}
                  </div>
                  <span class="badge bg-primary rounded-pill fs-6">{$item["price"]}€</span>
                </li>
              HTML;
            }
            echo <<<HTML
              </ul>
              </div>
            HTML;
          }
        ?>
    </div>
  </section>

  <!-- footer -->
  <?php include_once("components/footer.php"); ?>
</body>

</html>