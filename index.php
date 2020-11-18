<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['id']) || !isset($_SESSION['pwd'])) {
        Header('location: login.php');}//세션 미연결 시 login.php로 이동
else{
          echo"<br>";
        }
?>

<html>
<head>
    <title>게시글 작성</title>
</head>
<body>
  <?php
    echo "ID :".$_SESSION['id'].".<br>";
    echo "PW : ".$_SESSION['pwd'];
    ?>
    <a href="logout.php">로그아웃</a>
  <h1>게시글 작성</h1>
    <select name="게시판">
      <option value="free" selected>자유게시판
      <option value="diary">일기
    </select>
  <textarea name="textarea" cols="38" rows="1" id="textarea" style="resize: none;" placeholder="제목을 입력하세요."></textarea>
  <p><textarea name="message" cols="50" rows="10" id="textarea"  placeholder="내용을 입력하세요."></textarea></p>
  <p>
  <input type="button" id="button" onclick='button_click();' value="저장하기"/>
  </p>
  <script>
  function button_click(){
   alert("글이 저장되었습니다.");
  }
  </script>
  </form>
</body>
</html>
