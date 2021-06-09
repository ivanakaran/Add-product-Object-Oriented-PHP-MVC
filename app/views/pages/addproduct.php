<?php require APPROOT . '/views/inc/header.php';?>
<form action="<?= URLROOT?>/pages/addproduct" id="product_form" class="py-4" method="POST">
<div class="d-flex justify-content-between">

  <div>
    <h3>Product Add</h3>
  </div>
  <div>
    <input type="submit" class="btn btn-success btn-sm" value="Save">
    <a href="<?= URLROOT?>" class="btn btn-outline-secondary btn-sm" id="delete-product-btn">Cancel</a>
  </div>
</div>
<hr>



  <div class="container">
    <div class="form-group row">
        <label for="sku" class="col-form-label pr-3">SKU</label>
        <div class="col-sm-3">
          <input type="text" class="form-control <?=(!empty($data['sku_err'])) ? 'is-invalid' : ''?> " name="sku" id="sku" placeholder="#sku" value="<?=$data['sku']?>">
          <span class="invalid-feedback"><?=$data['sku_err']?></span>
         
    </div>
    </div>
    
    <div class="form-group row">
        <label for="name" class="col-form-label pr-1">Name</label>
        <div class="col-sm-3">
          <input type="text" class="form-control <?=(!empty($data['name_err'])) ? 'is-invalid' : ''?>" name="name" id="name" placeholder="#name" value="<?=$data['name']?>">
          <span class="invalid-feedback"><?=$data['name_err']?></span>
    </div>
    </div>

    <div class="form-group row">
        <label for="price" class="col-form-label">Price $</label>
        <div class="col-sm-3">
          <input type="number" step ="0.01" min="0" class="form-control <?=(!empty($data['price_err'])) ? 'is-invalid' : ''?>" name="price" id="price" placeholder="#price" value="<?=$data['price']?>">
          <span class="invalid-feedback"><?=$data['price_err']?></span>
    </div>
    </div>

    <div class="form-group row">
        <label for="productType" class="col-form-label">Type Switcher</label>
        <div class="col-sm-3">
          <select name="type" class="form-control select <?=(!empty($data['type_err'])) ? 'is-invalid' : ''?>" id="productType" data-target=".type">
          <option value="">Type Switcher</option>
          <option value="dvd" id="dvd" data-show=".dvd">DVD</option>
            <option value="book" id="book" data-show=".book">Book</option>
            <option value="furniture" id="dimension" data-show=".furniture">Furniture</option>
          </select>
          <span class="invalid-feedback"><?=$data['type_err']?></span>
    </div>
    </div>

    <div class="type">      
        <div class="form-group row dvd hide">
            <label for="dvdvalue" class="col-form-label">DVD Size(MB)</label>
            <div class="col-sm-3">
              <input type="number" min="0" id="size" name="size" class="form-control" placeholder="Size in MB">
            </div>
        </div>
        <div class="form-group row book hide">
            <label for="bookvalue" class="col-form-label">Book Weight(KG)</label>
            <div lass="col-sm-3">
              <input type="number" min="0" id="weight" name="weight" class="form-control ml-1" placeholder="Weight in (KG)">
            </div>
        </div>
        <div class="furniture hide form-group row">
            <label class="col-form-label">Furniture Dimensions(HxWxL) (CM)</label>
            <div class="col-sm-3">
              <input type="number" min="0" id="height" name="height" class="form-control" placeholder="Height in (CM)">
            </div>
            <div class="col-sm-3">
              <input type="number" min="0" id="width" name="width" class="form-control" placeholder="Width in (CM)">
            </div>
            <div class="col-sm-3">
              <input type="number" min="0" id="length" name="length" class="form-control" placeholder="Length in (CM)">
            </div>
        </div>
    </div>
  </div>
  <input type="hidden" class="form-control mb-4 <?=(!empty($data['typevalue_err'])) ? 'is-invalid' : ''?>" id="typev" name="typev">
  <span class="invalid-feedback"><?=$data['typevalue_err']?></span>
</form>

<?php require APPROOT . '/views/inc/footer.php';?>