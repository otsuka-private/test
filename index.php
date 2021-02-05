<?php
  $list = array(
      array(1,'りんご',100),
  		array(2,'みかん',150),
  		array(3,'いちご',300)
    );

  $fp = fopen('./assets/hello.csv', 'w');
  foreach($list as $data){
  	$line = implode(',' , $data);
  	fwrite($fp, $line . "\n");
  }
  fclose($fp);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Learing PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylesheet.min.css">
  </head>
  <body>
    <?php
      echo "hello.csvに書き込みました。";
     ?>
  </body>
</html>
