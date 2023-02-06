<?php
$current_page = "messages";
$pages = array(
  "messages" => "Messages",
  "menu" => "Menu",
  "pictures" => "Pictures",
);

if (isset($_GET["page"])) {
  $current_page = $_GET["page"];

  if (!array_key_exists($current_page, $pages)) {
    $current_page = "messages";
  }
}
?>

<form method="get">
  <ul class="nav nav-tabs px-4">
    <?php
      foreach($pages as $key => $value) {
        $active = $current_page == $key ? "active" : "";
        echo <<<HTML
        <li class="nav-item">
          <button type="submit" name="page" value="$key" class="nav-link text-center m-auto $active">$value</button>
        </li>
        HTML;
      }
    ?>
  </ul>
</form>
<div id="content" class="py-2 w-100">
  <?php include("components/dashboard/$current_page.php"); ?>
</div>