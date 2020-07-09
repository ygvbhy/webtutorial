<!-- 회원 가입 -->
<?php
    include "db.php";
    $join = new Mysql_DB("localhost", "root", "wjsansrk", "test");
?>
<!DOCTYPE html>
<html lang = "ko">
    <head>
        <title>회원가입</title>
        <meta charset = "UTF-8">
        
    </head>
    <body>
        <h1>회원가입</h1>
        <form action = "join_sql.php" method = "POST">
        아이디 : <input type = "text" autofocus minlength = "6" maxlength = "10" name = "id" id = "user_id">
        <br>
        비밀번호 : <input type = "password" name = "password" minlength = "8" maxlength = "16" id = "user_pw">
        <br>
        비밀번호 확인 : <input type = "password" name = "password_check" minlength = "8" maxlength = "16" id = "user_pw_check" onchange = "comparePw()">
        <script>
            var userPw = document.getElementById("user_pw");
            var userPwCheck = document.getElementById("user_pw_check");

            function comparePw(){
                if (userPw.value != userPwCheck.value){
                    alert('암호가 다릅니다.');
                    userPwCheck.value = "";
                    userPwCheck.focus();
                }
            }
        </script>
        <br>
        이름 : <input type = "text" name = "name" maxlength = "10"><br>
        <input type = "submit" value = "회원가입">
        <input type = "reset" value = "초기화">
        </form>
        <a href = "login.php"><button>홈 화면</button></a>
        
    </body>
</html>