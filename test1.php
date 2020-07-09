<!-- 게시판  -->
<?php
session_start();
include "db.php";
$select = new Mysql_DB("localhost", "root", "wjsansrk", "test");
$name = $_SESSION['name'];
if (!$name){
    echo"
        <script>
        alert ('잘못된 접근입니다.');
        location.href = 'login.php';
        </script>";
}
else {
    echo "<h4>".$name." 님 환영합니다.</h4>"
?>

<!DOCTYPE html>
<html lang = "ko">
    <head>
        <title>test</title>
        <meta charset = "UTF-8">
        <!-- <meta http-equiv="refresh" content="0;url=test1.php"/> -->
        <link rel = "stylesheet" type = 'text/css' href = "list.css"/>
    </head>
    <body>
    <h1>자유게시판</h1>
        <table border = "1">
        <thead>
            <tr>
                <td class = "ind">번호</td>
                <td class = "title">제목</td>
                <td class = "date_list">입력일</td>
                <td class = "ind">조회수</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $select->select_db("SELECT ind, title, date, hit from content order by ind desc;");
        ?>
        </tbody>
        </table>
        <div class = "write">
        <a href = "write.php"><button>글쓰기</button></a>
        <a href = "login.php"><button>홈</button></a>
        </div>

        <?php } ?>
    </body>
</html>