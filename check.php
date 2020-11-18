<?php
session_start();
$ID=$_POST['ID'];
$PW=$_POST['PW'];
$con=mysqli_connect("localhost","root","toor0310","mydb");

$query="select * from member where id='$ID'";
$result=mysqli_query($con,$query) or die("query error");

if($result->num_rows==1){
  $row=$result->fetch_array(MYSQLI_ASSOC);
  if($row['pwd']==$PW){
    $_SESSION['id']=$ID;
    if(isset($SESSION['id']))
    {
      Header('location: index.php');
    }
    else {
      echo "세션 저장 실패";
    }
  }
  else {
    echo "아이디 또는 비밀번호를 잘못 입력하였습니다.";
  }
}
else {
  echo "아이디 또는 비밀번호를 잘못 입력하였습니다.";
}

 ?>
