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

<div class="d-md-flex align-items-stretch">
  <div class="p-4 pt-5">
    <div class="row nav nav-pills">
      <form method="get">
        <?php
          foreach($pages as $key => $value) {
            $active = $current_page == $key ? "active" : "";
            echo <<<HTML
            <li class="nav-item row">
              <button type="submit" name="page" value="$key" class="nav-link text-center m-auto $active">$value</button>
            </li>
            HTML;
          }
        ?>
      </form>
    </div>
  </div>
</div>