<!-- 로그아웃 -->
<?php
session_start();
session_destroy(); // 저장된 세션 삭제
?>
    <script>
    //alert('로그아웃 완료');
    location.href ='login.php';
    </script>