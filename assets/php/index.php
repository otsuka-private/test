<?php require './header.php'; ?>
<?php
date_default_timezone_set('Japan');
 ?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <form action="./accept_form.php" method="post" enctype="multipart/form-data">
          <div class="input-field">
           <input id="first" type="text" class="validate" name="product-name">
           <label for="first">Product Name</label>
         </div>
          <div class="input-field">
           <input id="second" type="text" class="validate" name="product-price">
           <label for="second">Product Price</label>
         </div>
          <button class="btn waves-effect waves-light" type="submit">GO <i class="fas fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require './footer.php'; ?>
