<?php
$category = $title = $description = $price = "";

if (isset($_POST["category"]) && isset($_POST["title"]) && isset($_POST["description"]) && isset($_POST["price"])) {
  $category = $_POST["category"];
  $title = $_POST["title"];
  $description = $_POST["description"];
  $price = $_POST["price"];

  $params = array(
    "category" => $category,
    "title" => $title,
    "description" => $description,
    "price" => $price
  );

  $data = post_query("http://localhost/api/menu/send.php", $params);
  unset($_POST);
}

if (isset($_POST["delete"])) {
  $id = $_POST["delete"];

  $params = array(
    "id" => $id,
  );

  $data = post_query("http://localhost/api/menu/delete.php", $params);
  unset($_POST);
}

$categories_request = get_query("http://localhost/api/menu/categories/get.php", array());
$menu_request = get_query("http://localhost/api/menu/get.php", array());
$categories = json_decode($categories_request, true);
$menu = json_decode($menu_request, true);

?>

<table class="table table-striped table-hover mb-5">
  <thead>
    <tr>
      <th></th>
      <th class="text-nowrap">Category</th>
      <th class="text-nowrap">Price (€)</th>
      <th class="text-nowrap">Title</th>
      <th class="text-nowrap">Description</th>
    </tr>
  </thead>
  <tbody>
    <form method="post">
      <?php
        foreach ($menu as $item) {
          echo <<<HTML
          <tr>
            <td class="p-0">
              <button type="submit" name="delete" value="{$item['id']}" class="btn btn-danger w-100 rounded-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
                  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                </svg>
              </button>
            </td>
            <td class="text-nowrap">{$item['display_name']}</td>
            <td class="text-end">{$item['price']}</td>
            <td>{$item['title']}</td>
            <td>{$item['description']}</td>
          </tr>
          HTML;
        }
      ?>
    </form>
  </tbody>
</table>
<form method="post">
  <div class="container col-4">
    <h5>Add new menu item</h5>
    <select name="category" class="form-select mb-3" required>
      <option selected disabled>Category</option>
      <?php
        foreach ($categories as $category) {
          echo <<<HTML
            <option value="{$category['id']}">{$category["display_name"]}</option>
          HTML;
        }
      ?>
    </select>
    <input type="text" class="form-control mb-3" name="title" placeholder="Title" required  value="<?php echo $title; ?>">
    <textarea type="text" class="form-control mb-3" name="description" placeholder="Description" required value="<?php echo $description; ?>"></textarea>
    <div class="input-group mb-3">
      <span class="input-group-text">€</span>
      <input type="number" class="form-control" name="price" placeholder="Price" required value="<?php echo $price; ?>">
    </div>
    <button type="submit" class="btn btn-contact">Submit</button>
  </div>
</form>