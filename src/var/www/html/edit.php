<?php
    $conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
    $print = $_GET['num'];
    $sql = "SELECT title, content FROM list WHERE num = $print;";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $sql = "UPDATE list SET title= '$title', content= '$content' WHERE num = $print;";
    mysqli_query($conn, $sql);
    header("Location: list.php");
    exit;
}
$sql2 = "SELECT title, content FROM list WHERE num = $print;";
$result = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result);
$title = $row['title'];
$content = $row['content'];
    ?>

<!DOCTYPE html>
<html>
<head>
  <title>게시판 블로그</title>
  <meta charset="utf-8">
</head>
<body>
    <h1>수정</h1>
    <hr>
     <a href="home.php">홈</a>
    <a href="write.php">글 작성</a>
    <a href="list.php">목록</a>
    <a href="index.php">로그아웃</a>
    <a href="edit.php?num=<?= $print ?>">수정</a>
    <a href="delete.php?num=<?= $print ?>">삭제</a>
    <br>
    <br>
    <form method="post" action="edit.php?num=<?= $print ?>" id="edit-form">
    <input type="text" name="title" placeholder="제목" value="<?= htmlspecialchars($title) ?>">
    <textarea name="content" placeholder="본문"><?= htmlspecialchars($content) ?></textarea>
    <button type="submit" name="button">수정</button>
</form>
</body>
</html>