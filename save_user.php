<?php

$id = $_POST['id'];
$password = $_POST['password'];


$conn = mysqli_connect('localhost', 'root', '', 'hokt');


if (!$conn) {
  die('Connection failed: ' .mysqli_connect_error($conn));
} else {
echo "Done"; }

$sql = "INSERT INTO users (id, password) VALUES ('$id', '$password')";

if(mysqli_query($conn,$sql)) {
  echo "Done";
  header("Location: intex.html");
exit;

} else {
  echo "Error:".mysqli_error($conn);
}
mysqli_close($conn);
?>
