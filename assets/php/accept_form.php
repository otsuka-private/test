<?php require './header.php'; ?>
<div class="container">
  <div class="card">
    <div class="card-content">
      <?php
      $pdo = new PDO('mysql:host=localhost;dbname=test', 'otsuka', 'test');
      $pdo->prepare('');
      ?>
    </div>
  </div>
</div>
<?php require './footer.php'; ?>
