<div class="row mx-0 justify-content-center align-items-center" style="height: 50vh;">
      <div class="col-sm-3 mt-5 mb-sm-0 " >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$post['title']?></h5>
        <p class="card-text"><?=$post['body']?></p>
        <div class="d-flex justify-content-between">
         <a href=<?= "/post/update?id={$post['id']}"?> class="btn btn-primary">Update</a>
        <form method='POST' action=<?= "/post/delete?id={$post['id']}"?>>
           <button type='submit' class='btn btn-primary'>delete</button>
         </form>
        </div>
      
      </div>
    </div>
  </div>
</div> 