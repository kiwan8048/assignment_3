<?php 
$conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$id = mysqli_real_escape_string($conn, $_POST['id']);
$pw = mysqli_real_escape_string($conn, $_POST['password']);
$sql = "INSERT INTO register (id, password) VALUES ('$id', '$pw');";
mysqli_query($conn, $sql);
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>게시판 블로그</title>
  <meta charset="utf-8">
</head>
<body>
    <h1>회원 가입</h1>
    <hr>
    <a href="home.php">홈</a>
    <a href="index.php">로그인</a>
    <a href="register.php">회원가입</a>
    <br>
    <h3>&nbsp;회원 가입</h3>
    <form method="post" action="register.php" id="register-form">
        <input type="text" name="id" placeholder="id" required>
        <input type="password" name="password" placeholder="password" required>
        <button name="button">제출</button>
    </form>
</body>
</html>
