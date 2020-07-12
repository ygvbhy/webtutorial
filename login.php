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
        <script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>
    <body>
        <h1>로그인</h1>
        <form action = "login_sql.php" method = "POST" id = "form">
        아이디 : <input type = "text" name = "id" id = "id"><br>
        비밀번호 : <input type = "password" name = "password" id = "password"><br>
        <input type = "submit" value = "로그인">
        </form>
        <p id = "meg"></p>
        <a href = "join.php"><button>회원가입</button></a>
        <script>
            // 아무것도 없이 로그인 버튼 만 누르면 경고창 출력
            $("#form").submit(function(){
                if ($("#id").val() == "" || $("#password").val() == ""){
                    $("#meg").html("값을 입력해 주세요.");
                    $("#meg").css("color", "red");
                    return false;
                }
            });
        </script>
<?php
}
else {
    echo "<h1>".$name." 님 환영합니다.</h1>";
?>
    <br><br>
    <a href = "logout.php"><button>로그아웃</button></a>
    <a href = "#"><button>개인정보 수정</button></a> <!-- 준비중 -->
    <a href = "test1.php"><button>게시판</button></a>
<?php } ?>

</body>
</html>