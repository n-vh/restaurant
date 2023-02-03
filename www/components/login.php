<section class="container">
  <div class="row my-5 justify-content-center">
    <form class="col-6" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-outline mb-4">
        <input name="username" type="text" placeholder="Username" class="form-control" />
      </div>
      <div class="form-outline mb-4">
        <input name="password" type="password" placeholder="Password" class="form-control" />
      </div>
      <button type="submit" class="btn btn-contact">Log in</button>
    </form>
  </div>
</section>