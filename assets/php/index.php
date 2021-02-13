<?php require './header.php'; ?>
<?php
date_default_timezone_set('Japan');
 ?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <form action="./accept_form.php" method="post" enctype="multipart/form-data">
          <!-- <div class="input-field">
            <p>入力してください。</p>
            <input id="address-number" type="text" class="validate" name="user-input">
            <label for="address-number">郵便番号</label>
          </div> -->
          <div class="file-field input-field">
            <div class="btn">
              <span>Select File</span>
              <input type="file" name="user-input">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
            </div>
          </div>
          <button class="btn waves-effect waves-light" type="submit">GO <i class="fas fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require './footer.php'; ?>
