<div class="row">
  <div class="col-6 mx-auto mt-5 shadow-sm">
    <h2 class="text-center">Update post</h2>
    <div class="col-8 container">
      <form action="" method="POST" class="">
        <div class="form-group">
          <label for="title" class="form-label mb-3">Title</label>
          <input type="text" name="title" id="title" placeholder="Title" class="form-control mb-3">
            <p style="color: red;"><?= $errors['title']?? ''?></p>
          <label for="body" class="form-label mb-3">Body</label>
          <input type="text" name="body" id="body" placeholder="Body" class="form-control mb-3">
          <p style="color: red;"><?= $errors['body']?? ''?></p>

        </div>
          <button type="submit" class="btn btn-primary mb-3">Update post</button>
        </div>
      </form>
    </div>
  </div>

