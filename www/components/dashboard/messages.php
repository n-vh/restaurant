<?php

if (isset($_POST["delete"])) {
  $id = $_POST["delete"];

  $params = array(
    "id" => $id,
  );

  $data = post_query("http://localhost/api/messages/delete.php", $params);

  if (!array_key_exists($current_page, $pages)) {
    $current_page = "messages";
  }
}

$data = get_query("http://localhost/api/messages/get.php", array());
$messages = json_decode($data, true);
?>

<form method="post">
  <table class="table table-striped table-hover text-nowrap">
    <thead>
      <tr>
        <th>Delete</th>
        <th>Date</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($messages as $message) {
        echo <<<HTML
        <tr>
          <td class="p-0">
            <button type="submit" name="delete" value="{$message['id']}" class="btn btn-danger">
              X
            </button>
          </td>
          <td>{$message['created_at']}</td>
          <td>{$message['first_name']} {$message['last_name']}</td>
          <td>{$message['email']}</td>
          <td>{$message['message']}</td>
        </tr>
        HTML;
      }
      ?>
    </tbody>
  </table>
</form>
