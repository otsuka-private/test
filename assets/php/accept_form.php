<?php require './header.php'; ?>
<?php
$addressNumber = $_REQUEST['address'];
$wasUserInputValid = preg_match('/\d{3}-\d{4}/', $addressNumber);
if ($wasUserInputValid == 1) {
  echo "user input valid";
} else {
  echo "user input invalid";
}
?>
<?php require './footer.php'; ?>
