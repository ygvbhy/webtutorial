<?php
    include "db.php";
    $check = new Mysql_DB("localhost", "root", "wjsansrk", "test");
    $idc = $_GET['id'];
    $id = $check->login_check_id_db("SELECT Id from login where Id = '$idc';");

    if($id == $idc){ ?>
        <p style = "color: red;">중복된 아이디가 있습니다.</p>
        <button onclick = "window.close()" > 닫기</button>
        <?php
    }
    else { ?>
        <p style = "color: green">사용 가능</p>
        <button onclick = "window.close()" > 닫기</button>
        <?php
    }
?>