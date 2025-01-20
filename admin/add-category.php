<?php 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php'); 
?>



<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <h4>Dodaj Kategoriju</h4>
          </div>
          <div class="card-body">
                <form action="code.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                  <div class="col-md-6">
                    <label for="">Name</label>
                    <input type="text" required name="name" placeholder="dodaj ime kategorije" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label for="">Slug</label>
                    <input type="text" required name="slug" placeholder="dodaj ime slug" class="form-control">
                  </div>
                  <div class="col-md-6">
                  <label for="">Deskripcija</label>
                    <textarea rows="3" required name="description" placeholder="dodaj deskripciju" class="form-control"></textarea>
                  </div>
                  <div class="col-md-6">
                  <label for="">Dodaj Image</label>
                    <input type="file" required name="image" class="form-control">
                  </div>
                  <div class="col-md-6">
                  <label for="">Meta Title</label>
                    <input type="text" required name="meta_title" placeholder="dodaj meta title" class="form-control">
                  </div>
                  <div class="col-md-6">
                  <label for="">Meta deskrpipcija</label>
                    <textarea rows="3" required name="meta_description" placeholder="dodaj meta_description" class="form-control"></textarea>
                  </div>
                  <div class="col-md-6">
                  <label for="">Meta Keywords</label>
                    <textarea rows="3" required name="meta_keywords" placeholder="dodaj keyword" class="form-control"></textarea>
                  </div>
                  <div class="col-md-6">
                  <label for="">Status</label>
                    <input type="checkbox" name="status">
                  </div>
                  <div class="col-md-6">
                  <label for="">Popular</label>
                    <input type="checkbox" name="popular">
                  </div>
                    <div class="col-md-12">
                    <button type="submit" class="btn btn-success" required name="add_category_btn">Save</button>
                    </div>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>