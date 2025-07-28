<?php
if(!isset($_SESSION['user']) &&!isset($_SESSION['email']) ) {
  redirect('/');
}
  ?>
<div class="row mx-0">
    <?php foreach($users as $user):?>
      <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$user['id']?></h5>
        <p class="card-text"><?=$user['username']?></p>
        <a href="<?='/user/posts?id='.$user['id']?>" class="btn btn-primary">view posts</a>
      </div>
    </div>
  </div>
  <?php endforeach?>
</div>
<?php
