<?php
  //1. db연결을 위한 변수
  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '1234';
  $dbname = 'product';

  //2. db연결 변수선언
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  //3. 만약에 db연결이 오류가 나면 메세지 띄운다
  if(!$conn){
    die('연결실패 : ' . mysqli_connect_error());
  }

  //4. 쿼리문
  $sql = 'select * from test_drive';
  $result = mysqli_query($conn, $sql);

  //5. 쿼리문이 오류가 있으면 메세지 띄운다.
  if(!$result){
    die('오류메세지 : ' . mysqli_error($conn));
  }

  $data = []; //데이터배열 생성
  while($row = mysqli_fetch_assoc($result)){
    $data[] = $row; //배열데이터 담는다.
  }

  mysqli_close($conn); //데이터베이스 종료

  $json = json_encode($data); //문자코드로 저장

  $filename = 'data.json'; //파일명 지정하기

  file_put_contents($filename, $json); //파일로 최종저장






?>