<?php 
  include('../db/db_conn.php');

  $mb_id = trim($_POST['id']);
  $mb_pw = trim($_POST['pw']);//사용자 암호

  $sql = "SELECT * FROM members WHERE mb_id = '$mb_id'";
  $result = mysqli_query($conn, $sql);

  //fetch_row는 인덱스 번호를 가지고 찾기
  //fetch_assoc는 컬럼명으로 찾기
  //fetch_array는 인덱스+컬럼명으로 찾기

  // $row = mysqli_fetch_assoc($result);
  $row = mysqli_fetch_row($result);

  //데이터베이스 암호
  // $mb_password = $row['mb_password'];
  $mb_password = $row[3];
  $mb_name = $row[2];

  if(password_verify($mb_pw, $mb_password)){
    
    session_start();

    $_SESSION['mb_id'] = $mb_id;
    $_SESSION['mb_name'] = $mb_name;

    if($mb_id=='admin'){
      //id가 admin일 경우
      echo "<script>location.replace('../product_mg.php');</script>";
    }else{
       //id가 admin이 아닐경우 
      echo "<script>location.replace('../index.php');</script>";
    }
  }
?>