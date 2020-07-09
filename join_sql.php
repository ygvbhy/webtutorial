<!-- 회원가입 SQL -->
<?php
    include "db.php";
    $join = new Mysql_DB("localhost", "root", "wjsansrk", "test");
    $id = $_POST['id'];
    $pass = $_POST['password'];
    $name = $_POST['name'];
    if ($name == ""){
        $name = "익명"; // 이름을 지정하지 않을 경우 '익명' 으로 수정후 저장
    }
    $id_check = $join->login_check_id_db("SELECT Id from login where Id = '$id';");

    if ($id && $pass){
        if ($id_check == $id){
            echo"
                <script>
                alert ('아이디 중복');
                location.href = 'login.php';
                </script>";
        }
        else {
        $join->duplicate("INSERT INTO login (Id, Pw, Name) values ('$id', SHA2('$pass', 224), '$name');");
        echo"
            <script>
            alert ('회원가입 완료');
            location.href = 'login.php';
            </script>";
        }
    }
    else {
        echo "
            <script>
            alert('정보를 입력해 주세요.');
            location.href = 'login.php';
            </script>";
    }
?>