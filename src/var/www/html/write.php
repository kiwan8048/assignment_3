<?php 
$conn = new mysqli("db", "exampleuser", "examplepass", "exampledb");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$title = mysqli_real_escape_string($conn, $_POST['Title']);
$content = mysqli_real_escape_string($conn, $_POST['Content']);
$sql = "INSERT INTO list (title, content) VALUES ('$title', '$content');";
mysqli_query($conn, $sql);
    header("Location: list.php");
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
    <h1>글 작성</h1>
    <hr>
     <a href="home.php">홈</a>
    <a href="write.php">글 작성</a>
    <a href="list.php">목록</a>
    <a href="index.php">로그아웃</a>
    <br>
    <br>
    <form method="post" action="write.php">
        <input type="text" name="Title" placeholder="제목">
        <input type="text" name="Content" placeholder="본문">
        <button name="button">제출</button>
</body>
</html>