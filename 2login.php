<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>login</title>
    <style type="text/css">
#center { position:absolute; margin-left:40%; margin-top:30px; background-color:#FC0; }
</style>
</head>
<body>
<div id="center">
<form method="post" action="4.login_check.php">
    <h2 align="center">로그인</h2>
    <table align="center">
    <tr>
    <td>아이디</td>
    <td><input type = "text" name="id" size ="15"></td>
    </tr>
    <tr>
    <td>비밀번호</td>
    <td><input type ="password" name="pw" size ="15"></td>
    </tr>
    </table>
    <br>
    <center>자동로그인방지기능</center>
    <center><img src="captcha.php"/><br></center>
    <center><input type="text" name="captcha"><br><br></center>
    <center><input type ="submit" value="로그인"><br><br></center>
    </form>
    <center><button onclick="location.href='3signup.php'">회원가입</button><br><br></center>
    <center><button onclick="location.href='https://accounts.google.com/o/oauth2/v2/auth?scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fcalendar%20https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fcalendar.readonly&state=state_parameter_passthrough_value&redirect_uri=http%3A%2F%2Flocalhost%3A3000%2Fsucess_login.php&response_type=code&client_id=38426412645-7p0beogm98l77es20v9i1sm7fq699hkn.apps.googleusercontent.com'">구글 로그인</button><br><br></cetner>
    <center><button onclick="location.href='https://www.facebook.com/v2.11/dialog/oauth?client_id=293861604667149&redirect_uri=http%3A%2F%2Flocalhost%3A3000%2Fsucess_login.php&state=st=state123abc,ds=123456789'">페이스북 로그인</button><br><br></cetner>

</body>
</html>
<?php

?>
