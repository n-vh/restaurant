<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["accept"])) {
  $_SESSION["gdpr"] = true;
}

if (!isset($_SESSION["gdpr"])) {
  echo <<<HTML
    <form method="post">
      <div class="d-flex justify-content-center h-100 w-100 position-absolute bg-dark bg-opacity-75"
        style="z-index:4000;height:100vh;width:100vw;overflow:hidden;">
        <div class="d-flex align-items-center align-self-center card px-5 py-3 text-center cookies">
          <img src="https://i.imgur.com/Tl8ZBUe.png" width="50">
          <span class="mt-2">We use necessary cookies for basic functionality.
            <br /> Please accept to visit the website.</span>
          <a class="d-flex align-items-center" href="#">Learn more.</a>
          <button class="btn btn-contact mt-3 px-4" name="accept" type="submit">I accept</button>
        </div>
      </div>
    </form>

    <style>
      body {
        overflow: auto;
      }
    </style>
  HTML;
}
?>