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

            $product = getbyID("products",$id);

            if(mysqli_num_rows($product) > 0)
            {
              $data = mysqli_fetch_array($product);
              ?>
                <div class="card">
                <div class="card-header">
                    <h4>edit Produkt
                      <a href="products.php" class="btn btn-success float-end">Back</a>
                    </h4>
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
                                    <option value="<?= $item['id']; ?>"<?= $data['category_id'] == $item['id']?'selected':'' ?>><?= $item['name']; ?></option>
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
                          <input type="hidden" name="product_id" value="<?=$data['id']; ?>">    
                        <div class="col-md-6">
                          <label class="mb-0">Name</label>
                          <input type="text" name="name" value="<?=$data['name']; ?>" placeholder="dodaj ime kategorije" class="form-control mb-2">
                        </div>
                        <div class="col-md-6">
                          <label class="mb-0">Slug</label>
                          <input type="text" name="slug" value="<?=$data['slug']; ?>" placeholder="dodaj ime slug" class="form-control mb-2">
                        </div>
                        <div class="col-md-6">
                        <label class="mb-0">Deskripcija</label>
                          <textarea rows="3" name="description" placeholder="dodaj deskripciju" class="form-control mb-2" value="<?=$data['description']; ?>"></textarea>
                        </div>
                        <div class="col-md-6">
                        <label class="mb-0">Mala Deskripcija</label>
                          <textarea rows="3" name="small_description" placeholder="dodaj malu deskripciju" class="form-control mb-2" value="<?=$data['small_description']; ?>"></textarea>
                        </div>
                        <div class="col-md-6">
                          <label class="mb-0">Originalna Cena</label>
                          <input type="text" name="original_price" placeholder="dodaj originalnu cenu" class="form-control mb-2" value="<?=$data['original_price']; ?>">
                        </div>
                        <div class="col-md-6">
                          <label class="mb-0">Prodajna Cena</label>
                          <input type="text" name="selling_price" placeholder="dodaj prodajnu cenu" class="form-control mb-2" value="<?=$data['selling_price']; ?>">
                        </div>
                        <div class="col-md-6">
                          <label class="mb-0">Dodaj Sliku</label>
                          <input type="hidden" name="old_image" value="<?=$data['image']; ?>">
                          <input type="file" name="image" class="form-control mb-2">
                          <label class="mb-0">Trenutna slika</label>
                          <img src="../uploads/<?=$data['image']; ?>" alt="Product image" height="50px" width="50px">
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <label class="mb-0">kolicina</label>
                            <input type="number" name="qty" placeholder="dodaj kolicinu" class="form-control mb-2" value="<?=$data['qty']; ?>">
                          </div>
                          <div class="col-md-3">
                          <label class="mb-0">Status</label> <br>
                            <input type="checkbox" name="status" <?=$data['status'] == '0'?'':'checked'?>>
                          </div>
                          <div class="col-md-3">
                          <label class="mb-0">Trending</label> <br>
                            <input type="checkbox" name="trending" <?=$data['trending'] == '0'?'':'checked'?>>
                          </div>
                        </div>
                        <div class="col-md-6">
                        <label class="mb-0">Meta Title</label>
                          <input type="text" name="meta_title" placeholder="dodaj meta title" class="form-control mb-2" value="<?=$data['meta_title']; ?>">
                        </div>
                        <div class="col-md-6">
                        <label for="">Meta deskrpipcija</label>
                          <textarea rows="3" name="meta_description" placeholder="dodaj meta_description" class="form-control mb-2" value="<?=$data['meta_description']; ?>"></textarea>
                        </div>
                        <div class="col-md-6">
                        <label for="">Meta Keywords</label>
                          <textarea rows="3" name="meta_keywords" placeholder="dodaj keyword" class="form-control mb-2" value="<?=$data['meta_keywords']; ?>"></textarea>
                        </div>
                          <div class="col-md-12">
                          <button type="submit" class="btn btn-success" name="update_product_btn">update</button>
                          </div>
                        </div>
                      </form>
                    </div>
                </div>
              <?php
            }
            else 
            {
              echo"Ne poznat produkt za ID";
            }

          }
          else 
          {
            echo"id fali iz url-a";
          }
        ?>
        </div>
      </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>