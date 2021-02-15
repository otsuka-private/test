<?php require './header.php'; ?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=test', 'otsuka', 'test');
$pdo->query('CREATE TABLE product (
  id int PRIMARY KEY auto_increment,
  name VARCHAR(20) not null,
  price int not null
);');
 ?>
<?php require './footer.php'; ?>
