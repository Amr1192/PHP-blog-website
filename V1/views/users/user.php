<div class="row mx-0 justify-content-center align-items-center" style="height: 50vh;">
      <div class="col-sm-3 mt-5 mb-sm-0 " >
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$user['id']?></h5>
        <p class="card-text"><?=$user['username']?></p>
        <div class="d-flex justify-content-between">
         <a href=<?= "/user/update?id={$user['id']}"?> class="btn btn-primary">Update</a>
        <form method='POST' action=<?= "/user/delete?id={$user['id']}"?>>
           <button type='submit' class='btn btn-primary'>Logout</button>
         </form>
        </div>
      
      </div>
    </div>
  </div>
</div> 