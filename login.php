<?php
session_start();
$_SESSION['ID'] = "lek";
$_SESSION["PW"] = "1111";

 ?>


<!DOCTYPE html>
<html>
<head>
    <title>로그인페이지</title>
</head>


<body>
  <h1>LOGIN</h1>
  <form action = "check.php" method="POST">
    <table>
      <tr>
        <td>ID</td>
        <td><input type="text" name="ID" /></td>
      </tr>
      <tr>
        <td>PW</td>
        <td><input type="password" name="PW" /></td>
      </tr>
    </table>
      <input type="button" onclick="location.href = 'check.php'" value="login"/>
</body>
</html>
