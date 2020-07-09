<!-- 로그인 -->
<?php
session_start();
$name = $_SESSION['name'];
if ($name == ""){  
?>
<!DOCTYPE html>
<html lang = "ko">
    <head>
        <title>로그인</title>
        <meta charset = "UTF-8">
    </head>
    <body>
        <h1>로그인</h1>
        <form action = "login_sql.php" method = "POST">
        아이디 : <input type = "text" name = "id"><br>
        비밀번호 : <input type = "password" name = "password"><br>
        <input type = "submit" value = "로그인">
        </form>
        <a href = "join.php"><button>회원가입</button></a>

<?php
}
else {
    echo "<h1>".$name." 님 환영합니다.</h1>";
?>
    <br><br>
    <a href = "logout.php"><button>로그아웃</button></a>
    <a href = "#"><button>개인정보 수정</button></a>
    <a href = "test1.php"><button>게시판</button></a>
<?php
}

?>

</body>
</html>