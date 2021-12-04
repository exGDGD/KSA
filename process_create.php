<?php
;
$conn = mysqli_connect(
  'localhost',
  'root',
  'joon2005@',
  'capston',
   3307);
  # title, description 이라는 사용자가 입력한 정보를 그대로 php에 입력하는 행위는 보안에 취약, 따라서 관리 필요

  
   

$sql = "
  INSERT INTO topics
    (menu, description, created)
    VALUES(
      '{$_POST['menu']}',
      '{$_POST['description']}',
     
      NOW()
    )
";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
} else {
  echo '성공했습니다. <a href="create.html">돌아가기</a>';
}
?>