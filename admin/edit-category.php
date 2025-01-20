<?php 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php'); 
?>



<div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php 
          if(isset($_GET['id']))
          {
            $id = $_GET['id'];
            $category = getByID("categories", $id);
            
            if(mysqli_num_rows($category) > 0)
            {
              $data = mysqli_fetch_array($category);
              ?>
                  <div class="card">
             <div class="card-header">
                 <h4>Edit kategoriju
                  <a href="category.php" class="btn btn-success float-end">Back</a>
                  </h4>
             </div>
             <div class="card-body">
                   <form action="code.php" method="post" enctype="multipart/form-data">
                     <div class="row">
                     <div class="col-md-6">
                     <input type="hidden" name="category_id" value="<?= $data['id'] ?>">
                       <label for="">Name</label>
                       <input type="text" name="name" value="<?= $data['name'] ?>" placeholder="dodaj ime kategorije" class="form-control">
                     </div>
                     <div class="col-md-6">
                       <label for="">Slug</label>
                       <input type="text" name="slug" value="<?= $data['slug'] ?>" placeholder="dodaj ime slug" class="form-control">
                     </div>
                     <div class="col-md-6">
                     <label for="">Deskripcija</label>
                       <textarea rows="3" name="description" placeholder="dodaj deskripciju" class="form-control"><?= $data['description'] ?></textarea>
                     </div>
                     <div class="col-md-6">
                     <label for="">Dodaj Image</label>
                       <input type="file" name="image" value="<?= $data['image'] ?>" class="form-control">
                       <label for="">Trenutna Slika</label>
                       <img src="../uploads/<?= $data['image'] ?>" height="50px" width="50px" alt="">
                       <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                     </div>
                     <div class="col-md-6">
                     <label for="">Meta Title</label>
                       <input type="text" name="meta_title" value="<?= $data['meta_title'] ?>" placeholder="dodaj meta title" class="form-control">
                     </div>
                     <div class="col-md-6">
                     <label for="">Meta deskrpipcija</label>
                       <textarea rows="3" name="meta_description" placeholder="dodaj meta_description" class="form-control"><?= $data['meta_description'] ?></textarea>
                     </div>
                     <div class="col-md-6">
                     <label for="">Meta Keywords</label>
                       <textarea rows="3" name="meta_keywords" placeholder="dodaj keyword" class="form-control"><?= $data['meta_keywords'] ?></textarea>
                     </div>
                     <div class="col-md-6">
                     <label for="">Status</label>
                       <input type="checkbox" <?= $data['status'] ? "checked":"" ?> name="status">
                     </div>
                     <div class="col-md-6">
                     <label for="">Popular</label>
                       <input type="checkbox" <?= $data['popular'] ? "checked":"" ?> name="popular">
                     </div>
                       <div class="col-md-12">
                       <button type="submit" class="btn btn-success" name="update_category_btn">Promeni</button>
                       </div>
                     </div>
                   </form>
                 </div>
                  </div>
              <?php
            }
            else
            {
              echo "nije pronadjena kategorija";
            }
          }
          else
          {
            echo "id nedostaje iz url";
          }
        ?>
        </div>
      </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>