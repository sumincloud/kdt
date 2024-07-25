<?php
  session_start(); // 세션 시작

  // 데이터베이스 연결
  include('./include/dbconn.php');
  // 세션 ID 확인
  if (!isset($_SESSION['id'])) {
    echo "로그인";
    exit(); // 스크립트 종료
  }


  $class_no = $_GET['class_no'];
  $id = $_SESSION['id'];
  $name = $_SESSION['name'];
  date_default_timezone_set('Asia/Seoul');
  $datetime = date('Y-m-d H:i:s', time());

  //order 테이블에 데이터 추가
  $sql = "INSERT INTO `order` (class_no, id, datetime) VALUES ('$class_no', '$id', '$datetime')";
  if (mysqli_query($conn, $sql)) {
    echo "성공: 장바구니에 추가되었습니다.";
  } else {
    echo "실패: 오류가 발생했습니다: " . mysqli_error($conn);
  }
  // 데이터베이스 연결 종료
  mysqli_close($conn);
?>