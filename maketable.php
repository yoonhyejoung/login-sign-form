<?php
 echo "query()함수를 이용한 테이블 생성 <br />";
 
 $host="localhost";
 $user="root";
 $pw ="kek?03304";
 $db_name ="login";
 $mysqli = new mysqli($host, $user, $pw, $db_name);
 
 $sql = "CREATE TABLE login_db2(";
 $sql = $sql."id varchar(30) not null,";
 $sql = $sql."pw varchar(30) not null,";
 $sql = $sql."name varchar(30) not null,";
 $sql = $sql."address varchar(30) not null,";
 $sql = $sql."email varchar(30) not null);";
 if($mysqli->query($sql)){
     echo '테이블 생성 완료';
 }else{
     echo '테이블 생성 실패';
 }
 $sql = "insert into login_db2 values";
 $sql = $sql."('root', '1111', 'root', 'a', 'a@naver.com')";
 $mysqli ->query($sql);
 ?>