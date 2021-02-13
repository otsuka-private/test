<?php require './header.php'; ?>
<div class="container">
  <div class="card">
    <div class="card-content">
      <?php
      $uploadedFile = $_FILES['user-input']['tmp_name'];
      // 一時保存されたファイル
      if (is_uploaded_file($uploadedFile)) {
        if (!file_exists('uploaded_images')) {
          mkdir('./uploaded_images');
        }
        // 保存先予定のフォルダがなければ作成
        $filePath = './uploaded_images/'.basename($_FILES['user-input']['name']);
        // 保存先のフォルダへのパスを指定
        if (move_uploaded_file($uploadedFile, $filePath)) {
          echo "uploaded!";
          // 一時保存されたファイルを目的の保存先パスへ移動（結果的に望むように保存された）
        } else {
          echo "not uploaded!";
        }
      } else {
        echo "choose file again";
      }
      ?>
    </div>
  </div>
</div>
<?php require './footer.php'; ?>
