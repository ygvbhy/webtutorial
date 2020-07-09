<!-- 글 수정 SQL 문 -->
<?php
    include "db.php";
    $change = new Mysql_DB("localhost", "root", "wjsansrk", "test");
    $title = $_POST['title'];
    $content = $_POST['content'];
    $ind = $_POST['ind'];

    if ($title && $content){
        $change->duplicate("UPDATE content set title = '$title', content = '$content' where ind = '$ind';");
        echo "
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