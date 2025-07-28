<?php
if(!isset($_SESSION['user']) &&!isset($_SESSION['email']) ) {
  redirect('/');
}
  ?>
<div class="row mx-0">
    <?php foreach($posts as $post):?>
      <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$post['title']?></h5>
        <p class="card-text"><?=$post['body']?></p>
        <a href="/post" class="btn btn-primary">More details</a>
      </div>
    </div>
  </div>
  <?php endforeach?>
</div>