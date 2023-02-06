<?php

if (isset($_POST["delete"])) {
  $id = $_POST["delete"];

  $params = array(
    "id" => $id,
  );

  $data = post_query("http://localhost/api/messages/delete.php", $params);
}

$data = get_query("http://localhost/api/messages/get.php", array());
$messages = json_decode($data, true);
?>

<form method="post">
  <table class="table table-bordered table-striped table-hover text-nowrap">
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
            <button type="submit" name="delete" value="{$message['id']}" class="btn btn-danger w-100">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="width: 24px; height: 24px;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
              </svg>
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
