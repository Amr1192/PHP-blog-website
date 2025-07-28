<div class="row">
  <div class="col-6 mx-auto mt-5 shadow-sm">
    <h2 class="text-center">Register</h2>
    <div class="col-8 container mt-5">
      <form action="" method="POST" class="">
          <input type="text" name="username" id="username" placeholder="Enter your username" class="form-control mb-3" value="<?= $_SESSION['old']['username']?? ''?>">
            <p style="color: red;"><?= $_SESSION['errors']['username']?? ''?></p>
          <input type="email" name="email" id="email" placeholder="Enter your Email" class="form-control mb-3" value="<?= $_SESSION['old']['email']?? ''?>">
          <p style="color: red;"><?= $_SESSION['errors']['email']?? ''?></p>
          <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control mb-3" >
          <p style="color: red;"><?= $_SESSION['errors']['password']?? ''?></p>
          <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" class="form-control mb-3">
          <p style="color: red;"><?= $_SESSION['errors']['confirm_password']?? ''?></p>
          
          <button type="submit" class="btn btn-primary mb-3 form-control">Register</button>
        </div>
         <div class="text-center">
          <p>Already have an account? <a href="/login" class="text-decoration-none">Login</a></p>
        </div>
      </form>
    </div>
  </div>

  <?php
  unset($_SESSION['errors']);
  unset($_SESSION['old']);

