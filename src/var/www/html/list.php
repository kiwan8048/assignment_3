<?php
$conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
$sql = "SELECT title, num FROM list";
$print = mysqli_query($conn, $sql); 
?>

<!DOCTYPE html>
<html>
<head>
  <title>게시판 블로그</title>
  <meta charset="utf-8">
</head>
<body>
    <h1>게시물</h1>
    <hr>
    <a href="home.php">홈</a>
    <a href="write.php">글 작성</a>
    <a href="list.php">목록</a>
    <a href="index.php">로그아웃</a>
    <br>
    <h3>&nbsp;목록</h3> 
    <?php while ($row = mysqli_fetch_assoc($print)) {
      $num = $row['num'];
      $title = $row['title'];
      echo $num.'&nbsp;';
    ?>
      <a href="popup.php?num=<?= $num ?>">
        <?= $title ?>
      </a><br>
    <?php } ?>
</body>
</html>