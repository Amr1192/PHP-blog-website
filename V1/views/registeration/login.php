<div class="row">
  <div class="col-6 mx-auto mt-5 shadow-sm">
    <h2 class="text-center">Login</h2>
    <div class="col-8 mx-auto">
      <form action="" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" placeholder="Please enter your Email" class="form-control">
          <p style="color: red;"><?= $_SESSION['errors']['email']?? ''?></p>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" id="password" placeholder="Please enter your Password" class="form-control">
                    <p style="color: red;"><?= $_SESSION['errors']['password']?? ''?></p>

        </div>

        <div class="d-grid gap-2 mb-3">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>

        <div class="text-center mb-3">
          <a href="" class="text-decoration-none">Forgot Password?</a>
        </div>

        <div class="text-center">
          <p>Don't have an account? <a href="/register" class="text-decoration-none">Sign up</a></p>
        </div>
      </form>
    </div>
  </div>
</div>

  <?php
  unset($_SESSION['errors']);
  unset($_SESSION['old']);
