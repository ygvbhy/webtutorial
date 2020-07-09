<!-- 게시글 읽기 -->
<?php
    include "db.php";
    $read = new Mysql_DB("localhost", "root", "wjsansrk", "test");
    $inx = $_GET['ind']; // 글번호 받아옴
    $read->duplicate("UPDATE content set hit = hit + 1 where ind = '$inx';"); //조회수 증가
?>

<!DOCTYPE html>
<html lang = "ko">
<head>
    <title>글내용</title>
    <meta charset = "UTF-8">
    <link rel = "stylesheet" type = 'text/css' href = "list.css"/>
</head>
<body>
    <h1>읽기</h1>
    <?php
    echo "제목 : ";
    echo $read->read_title_db("SELECT title from content where ind = '$inx';");
    echo "<br> 내용 : ";
    echo $read->read_content_db("SELECT content from content where ind = '$inx';");
    echo "<br>";

    ?>
    <br>
    <a href = "test1.php"><button>목록</button></a>
    <?php
    echo "<a href = 'change.php?ind={$inx}'><button>수정</button></a>
        <a href = 'delete.php?ind={$inx}'><button>삭제</button></a>";
    ?>
</body>
</html>