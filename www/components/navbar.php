<?php
$current_page = basename($_SERVER["SCRIPT_FILENAME"], '.php');

$pages = array(
  "index" => array(
    "type" => "link",
    "name" => "Home",
  ),
  "menu" => array(
    "type" => "link",
    "name" => "Menu",
  ),
  "pictures" => array(
    "type" => "link",
    "name" => "Pictures",
  ),
  "restaurants" => array(
    "type" => "link",
    "name" => "Restaurants",
  ),
  "contact" => array(
    "type" => "button",
    "name" => "Contact",
  ),
);
?>

<?php
include_once('components/gdpr.php');
?>

<nav class="navbar navbar-expand-lg sticky-top bg-white py-3">
  <div class="container">
    <img class="mx-2" src="assets/images/logo.svg" height="38" width="56" />
    <a class="navbar-brand m-0 logo serif" href="index.php">The Pet Plate<b>.</b></a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#hamburger">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse text-center justify-content-end" id="hamburger">
      <ul class="navbar-nav gap-2 mb-2 mb-lg-0 mt-3 mt-lg-0">
        <?php
          foreach($pages as $page => $value) {
            $active = $current_page == $page ? " active" : "";
            $class = $value["type"] == "link" ? "nav-link" . $active : "btn btn-contact";
            echo <<<HTML
              <li class="nav-item">
                <a class="$class" href="$page.php">{$value["name"]}</a>
              </li>
            HTML;
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
<script>
  if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
  }
</script>