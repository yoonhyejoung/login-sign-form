<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SignUp</title>
    <style type="text/css">
#center { position:absolute; margin-left:40%; margin-top:30px; background-color:#FC0; }</style>

</head>
<body>
<div id="center">
    <form name="join" method="post" action="1dbinsert.php">
    <h1 align="center">회원가입</h1>
    <table align="center">
    <tr>
    <td>아이디</td>
    <td><input type ="text" size="20" name="id"></td>
    </tr>
    <tr>
    <td>비밀번호</td>
    <td><input type="password" size="20" name="pw"></td>
    </tr>
    <tr>
    <td>이름</td>
    <td><input type="text" size="20" name="name"></td>
    </tr>
    <tr>
    <td>주소</td>
    <td><input type="text" size="20" name = "address"></td>
    </tr>
    <tr>
    <td>이메일</td>
    <td><input type="text" size="20" name ="email"></td>
    </tr>
    </table><br>
    <center><input type="submit" value="가입" ><br><br><center>
    <input type="button" value="뒤로가기" onClick="location.href='2login.php'"><br><br>
</div>
</body>
</html>