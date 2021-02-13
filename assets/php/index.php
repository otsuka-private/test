<?php require './header.php'; ?>
<?php
date_default_timezone_set('Japan');
 ?>
<div class="row">
  <div class="col s12">
    <div class="card">
      <div class="card-content">
        <form action="./accept_form.php" method="post">
          <div class="input-field">
            <p>入力してください。</p>
            <input id="address-number" type="text" class="validate" name="user-input">
            <!-- <label for="address-number">郵便番号</label> -->
          </div>
          <button class="btn waves-effect waves-light" type="submit">GO <i class="fas fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php require './footer.php'; ?>
