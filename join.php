<!-- 회원 가입 -->
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
        <p id = "id_check"></p>
        비밀번호 : <input type = "password" name = "password" minlength = "8" maxlength = "16" id = "user_pw" onchange = "Pw_check()">
        <br>
        <p id = "pw_check"></p>
        비밀번호 확인 : <input type = "password" name = "password_check" minlength = "8" maxlength = "16" id = "user_pw_check" onchange = "comparePw()">
        <p id = "pw_check_ok"></p>
        <script>
            var userPw = document.getElementById("user_pw");
            var userPwCheck = document.getElementById("user_pw_check");

            // 비밀번호 일치하는지 확인
            function comparePw(){
                var userpwok = document.getElementById("pw_check_ok");
                if (userPw.value != userPwCheck.value){
                    userpwok.innerHTML = "비밀번호가 일치하지 않습니다.";
                    userpwok.style.color = "red";
                    userPwCheck.value = "";
                    userPwCheck.focus();
                }
                else {
                    userpwok.innerHTML = "비밀번호가 일치 합니다.";
                    userpwok.style.color = "green";
                }
            }

            // 비밀번호 표현식 확인
            function Pw_check(){
                var pattern = /[A-Za-z0-9]{8,16}$/g.exec(userPw.value);
                var pw_check = document.getElementById("pw_check");
                if(pattern == userPw.value){
                    pw_check.innerHTML = "안전";
                    pw_check.style.color = "green";
                }
                else {
                    pw_check.innerHTML = "영대소문자 숫자 8~16자리로 해주세요.";
                    userPw.value = "";
                    userPw.focus();
                    pw_check.style.color = "red";
                }

            }
        </script>
        이름 : <input type = "text" name = "name" maxlength = "10"><br><br>
        <input type = "submit" value = "회원가입">
        <input type = "reset" value = "초기화">
        </form>
        <a href = "login.php"><button>홈 화면</button></a>
        
    </body>
</html>