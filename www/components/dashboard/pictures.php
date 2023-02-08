<?php
$page = 1;
$uploads = 3;
$pictures_count = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  foreach($_FILES as $key => $file) {
    if ($file['error'] !== 0) {
      continue;
    }

    $file = $_FILES[$key];
    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));

    $allowed = array('jpg', 'jpeg', 'png');

    if (in_array($file_ext, $allowed) && $file_size <= 2097152) {
      $file_name_new = uniqid('', true) . '.' . $file_ext;
      $file_destination = 'assets/images/' . $file_name_new;
      if (move_uploaded_file($file_tmp, $file_destination)) {
        $request = post_query("http://localhost/api/pictures/send.php", array(
          "id" => $key,
          "url" => $file_destination
        ));
      }
    }
  }

  if (isset($_POST['delete'])) {
    echo ($_POST['delete']);
    $request = post_query("http://localhost/api/pictures/delete.php", array(
      "id" => $_POST['delete']
    ));
  }
}

$request = get_query("http://localhost/api/pictures/get.php", array());
$pictures = json_decode($request, true);
?>

<form enctype="multipart/form-data" method="post">
  <div class="d-flex justify-content-center w-100 pt-5">
    <div class="card">
      <?php
        for ($i = 0; $i < count($pictures); $i += 3) {
          $pictures_slice = array_slice($pictures, $i, 3);

          echo <<<HTML
            <div class="card-body text-center p-3 px-5">
              <h6 class="card-subtitle mb-2">Page {$page}</h6>
              <div class="d-flex gap-2">
          HTML;

          foreach($pictures_slice as $picture) {
            $pictures_count += 1;
            echo <<<HTML
              <label for="{$picture['id']}" style="cursor:pointer;">
                <img src="{$picture['url']}" id="img_{$picture['id']}" class="rounded" height="120px" width="120px">
                <input class="d-none" type="file" id="{$picture['id']}" name="{$picture['id']}"  onchange="showImage(this);">
                <button type="submit" name="delete" value="{$picture['id']}" class="btn btn-danger d-block mx-auto mt-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                  </svg>
                </button>
              </label> 
            HTML;
          }

          for ($j = 0; $j < $uploads - count($pictures_slice); $j += 1) {
            $id = end($pictures)['id'] + $j + 1;
            echo <<<HTML
              <label for="{$id}" style="cursor:pointer;">
                <img src="assets/images/selector.png" id="img_{$id}" class="rounded" height="120px" width="120px">
                <input class="d-none" type="file" id="{$id}" name="{$id}" onchange="showImage(this);">
              </label> 
            HTML;
          }

          echo <<<HTML
              </div>
            </div>
          HTML;

          $page += 1;
        }

        if ($pictures_count % 3 === 0) {
          echo <<<HTML
            <div class="card-body text-center p-3 px-5">
              <h6 class="card-subtitle mb-2">Page {$page}</h6>
              <div class="d-flex gap-2">
          HTML;

          for ($i = 1; $i <= $uploads; $i += 1) {
            $id = ($page - 1) * 3 + $i;
            echo <<<HTML
              <label for="{$id}" style="cursor:pointer;">
                <img src="assets/images/selector.png" id="img_{$id}" class="rounded" height="120px" width="120px">
                <input class="d-none" type="file" id="{$id}" name="{$id}" onchange="showImage(this);">
              </label> 
            HTML;
          }

          echo <<<HTML
              </div>
            </div>
          HTML;
        }
      ?>
      <div class="d-flex justify-content-center pt-1 pb-3">
        <button type="submit" class="btn btn-contact">Submit</button>
      </div>
    </div>
  </div>
</form>

<script>
  function showImage(input) {
    if (input.files && input.files[0]) {
      const reader = new FileReader();
      reader.readAsDataURL(input.files[0]);
      reader.onload = (e) => {
        document.getElementById("img_" + input.id).src = e.target.result;
      }
    }
  }
</script>