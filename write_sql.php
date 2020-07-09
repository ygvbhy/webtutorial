<!-- 글 작성 SQL 문 -->
<?php
    include "db.php";
    $write = new Mysql_DB("localhost", "root", "wjsansrk", "test");
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    if ($title && $content){
        $write->duplicate("INSERT INTO content (title, content, date) values ('$title', '$content', now());");
       echo"
            <script>
            alert ('작성 완료');
            location.href = 'test1.php';
            </script>";
    }
    else {
        echo "
            <script>
            alert ('작성 실패');
            location.href = 'test1.php';
            </script>";
    }
?>