<?php require APPROOT . '/views/inc/header.php';?>
<div class="d-flex justify-content-between">
  <div>
    <h3>Product List</h3>
  </div>
  <div class="d-flex justify-content-between">
    <div>
      <a href="<?= URLROOT?>/pages/addproduct" class="btn btn-success btn-sm mr-3">Add Product</a>
    </div>
    <div>
      <form action="<?= URLROOT?>/pages/deleteProduct" method="POST">
        <input type="submit" class="btn btn-outline-danger btn-sm" id="delete-product-btn" name="deleteMutlipleBtn"
          value="Mass Delete">
    </div>
  </div>
</div>
<hr>
<div class="row py-5">
  <?php foreach($data['products'] as $product) : ?>
  <div class="col-md-3 checkboxcard">
    <div class="card card-body mb-3 text-center">
      <div>
        <input class='float-left' type='checkbox' name="products[]" value="<?= $product->id?>">
      </div>

      <p class="m-0 p-0"><?=$product->sku?></p>
      <p class="m-0 p-0"><?=$product->name?></p>
      <p class="m-0 p-0"><?=$product->price?> $</p>
      <p class="m-0 p-0"><?=$product->typevalue?></p>
    </div>
  </div>
  <?php endforeach;?>
</div>
</form>

<?php require APPROOT . '/views/inc/footer.php';?>