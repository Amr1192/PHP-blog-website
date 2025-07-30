<div class="row mx-0">
    <?php foreach($posts as $post):?>
      <div class="col-sm-3 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$post['title']?></h5>
        <p class="card-text"><?=$post['body']?></p>
        <a href=<?= "/post?id={$post['id']}"?>><button class="btn btn-primary">More details</button></a>
      </div>
    </div>
  </div>
  <?php endforeach?>
</div>
