<?php 
  session_cache_limiter('');
  session_start();
    $host ='localhost';
    $user ='root';
    $password ='kek?03304';
    $db_name = 'login';
    $mysqli = new mysqli($host, $user, $password, $db_name);

    $id =$_POST["id"];
    $password = $_POST["pw"];
    
    $cnt1 =0;
    $cnt =0;
    $select_query = "SELECT id, pw FROM login_db2";
     //mysqli_query 연결된 객체를 이용하여 MySQL 쿼리를 실행시키는 함수
    $result_set = mysqli_query($mysqli, $select_query);
    if($_POST["captcha"] !="" && $_SESSION["digit"]==$_POST["captcha"]){
      $cnt1 =1;
    }
    
    while ($row=mysqli_fetch_array($result_set)){    
      if($id == $row['id'] && $password == $row['pw']){
        $cnt =1;
      }     
    }
    if($cnt ==1 && $cnt1==1){
      echo "<script>alert('로그인성공');</script>";
      echo "<script>location.href='sucess_login.php';</script>";

    }else{
      echo "<script>alert('로그인실패');</script>";
      echo "<script>location.href='2login.php';</script>";
    }
  ?>
  
