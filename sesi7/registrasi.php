<?php
    include("konfigurasi.php");
    include("fungsiUSER.php");
    $psn = "";
    if(isset($_POST["txUSER"]))
    if($_POST["txPASS1"] == $_POST["txPASS2"]){
        $nama  =$_POST["txNAME"];
        $email =$_POST["txEMAIL"];
        $user  =$_POST["txUSER"];
        $pass  =$_POST["txPASS1"];
        $psn = registerUSER($nama, $email, $user, $pass);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi user</title>
</head>
<body>

<form method="POST" action="registrasi.php">

    <div>
        nama lengkap
        <input type="text" name="txNAME">
    </div>
    
    <div>
        email
        <input type="text" name="txEMAIL">
    </div>
    <div>
        user name
        <input type="text" name="txUSER">
    </div>
    <div>
        password
        <input type="password" name="txPASS1">
    </div>
    <div>
        verifikasi paasword
        <input type="password" name="txPASS2">
    </div>
    <div>
        <button type="submit">registrasi</button>
    </div>
</form>
    
</body>
</html>