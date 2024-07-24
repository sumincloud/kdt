<?php
  session_start(); // 세션 시작

  // 데이터베이스 연결
  include('./include/dbconn.php');
  // 세션 ID 확인
  if (!isset($_SESSION['id'])) {
    echo "<script>
      alert('로그인이 필요한 서비스입니다.');
      window.location.href = './login.php';
    </script>";
    exit(); // 스크립트 종료
  }


  $class_no = $_POST['class_no'];
  $id = $_SESSION['id'];
  date_default_timezone_set('Asia/Seoul');
  $datetime = date('Y-m-d H:i:s', time());

  $sql = "INSERT INTO cart (class_no, id,  datetime)
  VALUES ('$class_no', '$id', '$datetime')";


  // 쿼리 실행
  if (mysqli_query($conn, $sql)) {
    echo "<script>alert('장바구니에 추가되었습니다.');</script>";
  } else {
    echo "오류가 발생했습니다: " . mysqli_error($conn);
  }


  // 데이터베이스 연결 종료
  mysqli_close($conn);


?>