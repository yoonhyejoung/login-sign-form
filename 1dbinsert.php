<?php
    $host ='localhost';
    $user ='root';
    $password ='kek?03304';
    $db_name = 'login';
    $mysqli = new mysqli($host, $user, $password, $db_name);

    $id =$_POST['id'];
    $password = $_POST['pw'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $sql = "insert into login_db2(id, pw, name, address, email)";
    $sql = $sql."values('$id', '$password','$name', '$address', '$email')";
    if($mysqli->query($sql)){
        echo "<script>alert('가입 완료');</script>";
        echo "<script>location.href='2login.php';</script>";
    }else
    echo "<script>alert('가입 실패');</script>"; 
?>
