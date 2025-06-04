<?php
$conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
$num = $_GET['num'];
$sql = "SELECT title, content FROM list WHERE num=$num";
$print = mysqli_query($conn, $sql); 
?>

<!DOCTYPE html>
<html>
<head>
  <title>게시판 블로그</title>
  <meta charset="utf-8">
</head>
<body>
    <h1>본문</h1>
    <hr>
     <a href="home.php">홈</a>
    <a href="write.php">글 작성</a>
    <a href="list.php">목록</a>
    <a href="index.php">로그아웃</a>
    <a href="edit.php?num=<?= $num ?>">수정</a>
    <a href="delete.php?num=<?= $num ?>">삭제</a>
    <br>
    <br>
    <?php
    while ($row = mysqli_fetch_assoc($print)) {
      $title = $row['title'];
      $content = $row['content'];
      echo $title.'&nbsp;';
      echo $content.'&nbsp;';
    }
    ?>
</body>
</html>