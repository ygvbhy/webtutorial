<!-- 글 수정 -->
<?php
    include "db.php";
    $change = new Mysql_DB("localhost", "root", "wjsansrk", "test");
    $inx = $_GET['ind'];
    $title = $change->read_title_db("SELECT title from content where ind = '$inx';");
    $content = $change->read_content_db("SELECT content from content where ind = '$inx';");

?>

<!DOCTYPE html>
<html lang = "ko">
<head>
    <title>글 수정</title>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = 'text/css' href = "list.css"/>
</head>
<body>
    <h1>글 수정</h1>
    <form action = "change_sql.php" method = "POST">
        <!-- 게시글 목록 가져오는 코드 -->
        제목 : 
        <?php
        echo "<input type = 'text' name = 'title' value = '{$title}'><br>
        내용 : <br><br>
        <textarea class = 'textarea' name = 'content'>{$content}</textarea><br>
        <input type = 'hidden' name = 'ind' value = '{$inx}'><br>";
        ?>
        <input type = "submit" value = "수정"><br>
    </form>
    <a href = "test1.php"><button>목록</button></a>
</body>
</html>