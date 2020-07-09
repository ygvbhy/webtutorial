<!-- 글 삭제 -->
<?php
    include "db.php";
    $read = new Mysql_DB("localhost", "root", "wjsansrk", "test");
    $inx = $_GET['ind'];
    $read->duplicate("DELETE from content where ind = '$inx';");
    $read->duplicate("ALTER table content auto_increment = 1;");
    echo "
        <script>
        alert ('삭제 완료');
        location.href = 'test1.php';
        </script>";
?>