<!DOCTYPE html>
<?php
session_start();

if(($_POST['ID']!='lek')||($_POST['PW']!='1111'){
  echo "<script>alert('아이디 또는 비밀번호가 잘못되었습니다.')";
}
else{
  Header('location: index.php');
}

 ?>
