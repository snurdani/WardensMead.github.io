<?php 
include('../middleware/adminMiddleware.php'); 
include('includes/header.php'); 
?>



<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
              <h4>Dodaj Produkt</h4>
          </div>
          <div class="card-body">
                <form action="code.php" method="POST" enctype="multipart/form-data">
                  <div class="row">
                  <div class="col-md-12">
                    <label for="">izaberi kategoriju</label>
                    <select name="category_id" class="form-select mb-2" >
                      <option selected>izaberi Kategoriju</option>

                      <?php
                       $categories = getAll("categories");

                       if(mysqli_num_rows($categories) > 0)
                       {
                       foreach($categories as $item)
                          {
                            ?>
                              <option value="<?= $item['id']; ?>"><?= $item['name']; ?></option>
                            <?php
                          }
                        }
                        else
                        {
                          echo"nema kategorija";
                        }
                      ?>
                    </select>  
                  </div>

                  <div class="col-md-6">
                    <label class="mb-0">Name</label>
                    <input type="text" required name="name" placeholder="dodaj ime kategorije" class="form-control mb-2">
                  </div>
                  <div class="col-md-6">
                    <label class="mb-0">Slug</label>
                    <input type="text" required name="slug" placeholder="dodaj ime slug" class="form-control mb-2">
                  </div>
                  <div class="col-md-6">
                  <label class="mb-0">Deskripcija</label>
                    <textarea rows="3" required name="description" placeholder="dodaj deskripciju" class="form-control mb-2"></textarea>
                  </div>
                  <div class="col-md-6">
                  <label class="mb-0">Mala Deskripcija</label>
                    <textarea rows="3" required name="small_description" placeholder="dodaj malu deskripciju" class="form-control mb-2"></textarea>
                  </div>
                  <div class="col-md-6">
                    <label class="mb-0">Originalna Cena</label>
                    <input type="text" required name="original_price" placeholder="dodaj originalnu cenu" class="form-control mb-2">
                  </div>
                  <div class="col-md-6">
                    <label class="mb-0">Prodajna Cena</label>
                    <input type="text" required name="selling_price" placeholder="dodaj prodajnu cenu" class="form-control mb-2">
                  </div>
                  <div class="col-md-6">
                  <label class="mb-0">Dodaj Sliku</label>
                    <input type="file" required name="image" class="form-control mb-2">
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label class="mb-0">kolicina</label>
                      <input type="number" required name="qty" placeholder="dodaj kolicinu" class="form-control mb-2">
                    </div>
                    <div class="col-md-3">
                    <label class="mb-0">Status</label> <br>
                      <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-3">
                    <label class="mb-0">Trending</label> <br>
                      <input type="checkbox" name="trending">
                    </div>
                  </div>
                  <div class="col-md-6">
                  <label class="mb-0">Meta Title</label>
                    <input type="text" required name="meta_title" placeholder="dodaj meta title" class="form-control mb-2">
                  </div>
                  <div class="col-md-6">
                  <label for="">Meta deskrpipcija</label>
                    <textarea rows="3" required name="meta_description" placeholder="dodaj meta_description" class="form-control mb-2"></textarea>
                  </div>
                  <div class="col-md-6">
                  <label for="">Meta Keywords</label>
                    <textarea rows="3" required name="meta_keywords" placeholder="dodaj keyword" class="form-control mb-2"></textarea>
                  </div>
                    <div class="col-md-12">
                    <button type="submit" class="btn btn-success" required name="add_product_btn">Save</button>
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