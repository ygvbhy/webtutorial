<?php
/* 
    * DB 접속을 위한 클래스
    * 마지막 수정자 : 박상윤
    * 수정일 : 20/07/10
 */
class Mysql_DB{
    public $db;
    public $db_host;
    public $db_user; 
    public $db_pass;
    public $db_name;
    public $sql;
    
    //DB 접속
    public function __construct($db_host, $db_user, $db_pass, $db_name){
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_name = $db_name;
        $this->db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    }
    
    // ID 중복 체크 및 로그인 아이디 확인
    public function login_check_id_db($sql){
        $this->db;
        $this->sql = $sql;
        $result = mysqli_query($this->db, $sql);
        while ($row = mysqli_fetch_assoc($result)){
            return $row['Id'];
        }
    }

    // 로그인 비밀 번호 비교
    public function login_check_pw_db($sql){
        $this->db;
        $this->sql = $sql;
        $result = mysqli_query($this->db, $sql);
        while ($row = mysqli_fetch_assoc($result)){
            return $row['Pw'];
        }
    }
    
    // 세션 확인용 이름 출력
    public function login_check_name_db($sql){
        $this->db;
        $this->sql = $sql;
        $result = mysqli_query($this->db, $sql);
        while ($row = mysqli_fetch_assoc($result)){
            return $row['Name'];
        }
    }

    // 글 목록 출력
    public function select_db($sql){
        $this->db;
        $this->sql = $sql;
        $result = mysqli_query($this->db, $sql);
        // 글 번호, 제목, 작성일, 조회수 순으로 테이블 형태로 출력
        while($row = mysqli_fetch_assoc($result)){
            echo"
            <tr>
            <td class = 'ind'>{$row['ind']}</td>
            <td class = 'title'><a href='read.php?ind={$row['ind']}'>{$row['title']}</a></td>
            <td class = 'date_list'>{$row['date']}</td>
            <td class = 'ind'>{$row['hit']}</td>
            </tr>";
        }
    }

    // 글 제목 출력
    public function read_title_db($sql){
        $this->db;
        $this->$sql = $sql;
        $result = mysqli_query($this->db, $sql);
        while($row = mysqli_fetch_assoc($result)){
            return $row['title'];
        }
    }

    // 글 내용 출력
    public function read_content_db($sql){
        $this->db;
        $this->$sql = $sql;
        $result = mysqli_query($this->db, $sql);
        while($row = mysqli_fetch_assoc($result)){
            return $row['content'];
        }
    }

    //글삭제 및 조회수 증가, 글쓰기, 글수정, 회원가입, 비밀번호 확인
    public function duplicate($sql){
        $this->db;
        $this->$sql = $sql;
        $result = mysqli_query($this->db, $sql);
    }
}
?>