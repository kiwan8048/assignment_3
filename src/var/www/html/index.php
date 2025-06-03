<?php 
    session_start(); 
    $conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST['id'];
    $pw = $_POST['password'];
    $sql = "SELECT password FROM register WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if($row == NULL)
    {
      header("Location: index.php");
      exit;
    } 
    $db_pw = $row['password'];
    if($db_pw == $pw)
    {
      $_SESSION["loggedin"] = true;
      header("Location: home.php");
      exit;
    }
    else
    {
      header("Location: index.php");
      exit;
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>게시판 블로그</title>
  <meta charset="utf-8">
</head>
<body>
    <h1>게시판 블로그</h1>
    <hr>
    <a href="home.php">홈</a>
    <a href="index.php">로그인</a>
    <a href="register.php">회원가입</a>
    <br>
    <h3>&nbsp;로그인</h3>
    <form method="post" action="index.php" id="login-form">
        <input type="text" name="id" placeholder="id">
        <input type="password" name="password" placeholder="password">
        <button name="button">제출</button>
</body>
</html>