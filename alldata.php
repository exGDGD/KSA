<?php
$conn = mysqli_connect(
  'localhost', // 주소
  '사용자ID',
  '비밀번호',
  'capston',
   3307);

 echo '<h1>Database</h1>';

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
    echo $row['stNUM'].' '.$row['name'].' '.$row['temperature'].'<br>';
    echo $row['created'].'<br>'.'<br>';
}