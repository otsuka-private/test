<?php require './header.php'; ?>
<div class="container">
  <div class="card">
    <div class="card-content">
      <?php
    $filePath = '../texts/hello.txt';
    if (file_exists($filePath)) {
        echo 'file exists!';
    }
    ?>
    </div>
  </div>
</div>
<?php require './footer.php'; ?>
