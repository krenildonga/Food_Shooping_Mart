<?php

$name = $_POST['name'];
$address = $_POST['address'];
$total="70.00";
$product="Watermelon & Onion";

$conn = mysqli_connect('localhost', 'root', '', 'checkout');


if (!$conn) {
  die('Connection failed: ' .mysqli_connect_error($conn));
} else {
echo "Done"; }

$sql = "INSERT INTO users (name, address, total, product) VALUES ('$name', '$address','$total','$product')";

if(mysqli_query($conn,$sql)) {
  echo "Done";
  header("Location: last.html");
exit;

} else {
  echo "Error:".mysqli_error($conn);
}
mysqli_close($conn);
?>
