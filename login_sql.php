<!-- 로그인 SQL -->
<?php
    include "db.php";
    $login = new Mysql_DB("localhost", "root", "wjsansrk", "test");
    $id = $_POST['id'];
    $pass = $_POST['password'];
    if(!$id && !$pass){
        echo"
            <script>
            alert ('아이디와 비밀번호를 확인해 주세요.');
            location.href = 'login.php';
            </script>";
    }
    else {
        $name = $login->login_check_name_db("SELECT Name from login where Id = '$id';");
        $pass_chack = $login->duplicate("SELECT SHA2('$pass', 224);");
        $id_check = $login->login_check_id_db("SELECT Id from login where Id = '$id';");
        $pw_check = $login->login_check_pw_db("SELECT Pw from login where Pw = SHA2('$pw', 224);");
        echo $pw_check;
        echo $pw;
        if ($id == $id_check && $pass_chack == $pw_check){
            session_start();
            $_SESSION['name'] = $name;
            echo"
                <script>
                alert ('로그인 완료');
                location.href = 'login.php';
                </script>";
        }
        else {
            echo"
                <script>
                alert ('아이디와 비밀번호를 확인해 주세요.');
                location.href = 'login.php';
                </script>";
        }
    }
?>