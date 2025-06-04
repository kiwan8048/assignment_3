<?php
$conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
$num = $_GET['num'];
$sql = "DELETE FROM list WHERE num = $num;";
$print = mysqli_query($conn, $sql); 
header("Location: list.php");
exit;
?>