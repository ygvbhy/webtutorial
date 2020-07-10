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
        &nbsp;<input type = "button" onclick = "id_check()" value = "중복확인"><br>
        <p id = "idc"></p>
        비밀번호 : <input type = "password" name = "password" minlength = "8" id = "user_pw" onchange = "Pw_check()">
        <br>
        <p id = "pw_check"></p>
        비밀번호 확인 : <input type = "password" name = "password_check" minlength = "8" id = "user_pw_check" onchange = "comparePw()">
        <p id = "pw_check_ok"></p>
        <script type = "text/javascript">
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
                // 숫자, 소문자, 대문자 한자리씩 최소 길이 8글자
                var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.exec(userPw.value);
                var pw_check = document.getElementById("pw_check");
                if(pattern == userPw.value){
                    pw_check.innerHTML = "안전";
                    pw_check.style.color = "green";
                }
                else {
                    pw_check.innerHTML = "영대소문자, 숫자 8자리이상으로 해주세요.";
                    userPw.value = "";
                    userPw.focus();
                    pw_check.style.color = "red";
                }
            }

            // 아이디 중복 확인
            function id_check(){
                var userid = document.getElementById("user_id");
                //한글 제외
                var useridc = /[^ㄱ-ㅎ|ㅏ-ㅣ|가-힣]{6,10}/.exec(userid.value);

                if (useridc){
                    // 검증 통과 했다면 새로운 창에서 중복 확인 진행
                    url = "login_check.php?id=" + useridc;
                    window.open(url, "중복확인", "width = 100, height = 50");
                    document.getElementById("idc").innerHTML = "";
                }
                else {
                    document.getElementById("idc").innerHTML = "입력을 안했거나 6자리 이하의 아이디 입니다.";
                    document.getElementById("idc").style.color = "red";
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