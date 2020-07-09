<!DOCTYPE html>
<html lang = "ko">
<head>
    <title>글쓰기</title>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = 'text/css' href = "list.css"/>
</head>
<body>
    <h1>글쓰기</h1>
    <form action="write_sql.php" method = "POST">
        제목 : <input type="text" name = "title"><br>
        내용  <br><br>
        <textarea class = "textarea" name = "content"></textarea>
        <input type="submit" value = "글쓰기"/>
    </form>
</body>
</html>