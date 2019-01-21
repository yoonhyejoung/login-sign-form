<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <a href="login2.html">login</a>
    <form action="https://www.googleapis.com/oauth2/v4/token" method="post" enctype="application/x-www-form-urlencoded">
    code : <input type="text" name ="code" value="<?=$_GET['code']?>" size="100px"><br>
    client_id : <input type="text" name="client_id" value="38426412645-7p0beogm98l77es20v9i1sm7fq699hkn.apps.googleusercontent.com"><br>
    client_secret : <input type="text" name="client_secret" value="4oDw_S1Hd0aRH4u1RYzmCyj4"><br>
    redirect_uri : <input type="text" name="redirect_uri" value="http://localhost:3000/recivecode.php" size="30px"><br>
    grant_type : <input type="text" name="grant_type" value="authorization_code"><br>
    <input type="submit">
</form>
</body>
</html>
