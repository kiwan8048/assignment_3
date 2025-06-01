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
    <form method="post" action="list.php" id="write-form">
        <input type="text" name="Title" placeholder="제목">
        <input type="password" name="Content" placeholder="본문">
        <button name="button">제출</button>
</body>
</html>