<?php
// 세션이 이미 시작되었는지 확인
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 데이터베이스 연결
include('./include/dbconn.php');

// 로그인 체크
if (!isset($_SESSION['id'])) {
    echo "<script>
        alert('로그인이 필요한 서비스입니다.');
        window.location.href = './login.php';
    </script>";
    exit();
}

// 폼 데이터 가져오기
$date = $_POST['selected_date'];
$room = $_POST['room'];
$time = $_POST['time_slot'];

// - 기준으로 시작 시간과 종료 시간 분리
list($start, $end) = explode('-', $time);

// 시간을 "HH:MM:SS" 형식으로 변환
$start = $start . ':00';
$end = $end . ':00';

// 정보 데이터 가져오기
$class_no = $_GET['class_no'];
$id = $_SESSION['id'];
$name = $_SESSION['name'];
date_default_timezone_set('Asia/Seoul');
$datetime = date('Y-m-d H:i:s', time());


// SQL 쿼리 준비
$sql = "INSERT INTO room (class_no, id, name, room_date, room, start, end, datetime) VALUES ('$class_no', '$id', '$name', '$date', '$room', '$start', '$end', '$datetime')";

// 쿼리 실행 여부 확인
if (mysqli_query($conn, $sql)) {
  echo "<script>
          window.location.href = '../reserve_complete.php?date=$date&room=$room&start=$start&end=$end';
        </script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



// 데이터베이스 연결 종료
mysqli_close($conn);
?>
