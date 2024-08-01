<?php
// 세션이 이미 시작되었는지 확인
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
include('./php/include/dbconn.php');

if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $name = $_SESSION['name'];

  //내가 선택한 강의정보 조회
  $class_no = $_GET['class_no'];

  $sql = "select * from academy_list where class_no = '$class_no'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
}else{
  echo "<script>
    alert('로그인이 필요한 서비스입니다.');
    window.location.href = './login.php';
  </script>";
}

?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>실습실 예약</title>
  <!-- 공통 헤드정보 삽입 -->
  <?php include('./php/include/head.php'); ?>
  <style>
    /* -----------실습실 예약 서식------------ */
    section{
      padding: 0 20px;
    }
    /* 768px 이상일때 요소배치 */
    @media (min-width: 768px) {
      section{
        width: 600px;
        margin: 50px auto 0 auto;
      }
    }
    section > h2{
      font-size: var(--fs-large);
      font-weight: var(--fw-bold);
      padding: 40px 0 20px 0;
      text-align: center;
    }
    /* main{
      height: 100%;
      min-height: 100vh;
    } */

    /* 달력 서식 */


    /* 폼 서식 */
    #reserve p{
      padding: 0 10px;
      font-size: var(--fs-medium);
      font-weight: var(--fw-semi-bold);
      margin-bottom: 15px;
    }
    .form-group {
      margin-bottom: 10px;
    }
    .radio-group label {
      display: block;
      cursor: pointer;
      border: 2px solid var(--gray);
      border-radius: 5px;
      padding: 10px 20px;
      margin: 0px;
      transition: background-color 0.3s, color 0.3s;
    }
    .radio-group input[type="radio"] {
      display: none;
    }
    .radio-group input[type="radio"]:checked + label {
      background-color: rgba(38, 164, 80, 0.08);
      border-color: var(--green);
    }
    /* 실습실 선택 */

    .room label{
      padding: 0;
      height: 150px;
      border: 5px solid rgba(0,0,0,0);
      border-radius: 5px;
      position: relative;
    }
    .room label img{
      width: 100%; height: 100%;
      object-fit:cover;
      border-radius: 5px;
    }
    .room label span{
      position: absolute;
      width: 100%;
      left:0px;
      bottom: 0px;
      color: var(--white);
      font-size: var(--fs-medium-large);
      background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
      padding: 20px 0 10px 10px; 
      border-radius: 5px; 
    }

    /* 시간 선택 */
    .time .form-group label{
      display: flex;
      justify-content: space-between;
    }

  </style>
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/include/header.php');?>

  <main>
    <section id="reserve">
      <h2>실습실 예약</h2>
      <!-- 예약 폼 -->
      <form action="./php/reserve_input.php"method="POST">
        <!-- 날짜 선택 -->
        <div class="mb-4">
          달력 들어갈 부분
        </div>

        <!-- 실습실 선택 리스트 -->
        <div class="mb-4 room">
          <p>실습실 선택 리스트</p>
          <div class="swiper-container radio-group">
            <div class="swiper-wrapper">
              <div class="swiper-slide form-group">
                <input type="radio" id="room1" name="class_no" value="101">
                <label for="room1">
                  <img src="./images/sub/room_101.jpg" alt="101호 이미지">
                  <span>101호</span>
                </label>
              </div>
              <div class="swiper-slide form-group">
                <input type="radio" id="room2" name="class_no" value="302">
                <label for="room2">
                  <img src="./images/sub/room_302.jpg" alt="302호 이미지">
                  <span>302호</span>
                </label>
              </div>
            </div>
          </div>
        </div>

        <!-- 사용시간 및 예약상황 -->
        <div class="mb-4">
          <p>
            <span>사용시간</span>
            <span style="float:right;">예약상황</span>
          </p>
          <div class="radio-group time">
            <div class="form-group">
              <input type="radio" id="time1" name="time_slot" value="08:00-09:00">
              <label for="time1">
                <span>08:00-09:00</span>
                <span>2/8</span>
              </label>
            </div>
            <div class="form-group">
              <input type="radio" id="time2" name="time_slot" value="09:00-10:00">
              <label for="time2">
                <span>09:00-10:00</span>
                <span>2/8</span>
              </label>
            </div>
            <div class="form-group">
              <input type="radio" id="time3" name="time_slot" value="10:00-11:00">
              <label for="time3">
                <span>10:00-11:00</span>
                <span>5/8</span>
              </label>
            </div>
            <div class="form-group">
              <input type="radio" id="time4" name="time_slot" value="11:00-12:00">
              <label for="time4">
                <span>11:00-12:00</span>
                <span>4/8</span>
              </label>
            </div>
            <div class="form-group">
              <input type="radio" id="time5" name="time_slot" value="12:00-13:00">
              <label for="time5">
                <span>12:00-13:00</span>
                <span>4/8</span>
              </label>
            </div>
            <div class="form-group">
              <input type="radio" id="time6" name="time_slot" value="13:00-14:00">
              <label for="time6">
                <span>13:00-14:00</span>
                <span>4/8</span>
              </label>
            </div>
            <div class="form-group">
              <input type="radio" id="time7" name="time_slot" value="15:00-16:00">
              <label for="time7">
                <span>15:00-16:00</span>
                <span>4/8</span>
              </label>
            </div>
            <div class="form-group">
              <input type="radio" id="time8" name="time_slot" value="16:00-17:00">
              <label for="time8">
                <span>16:00-17:00</span>
                <span>4/8</span>
              </label>
            </div>
          </div>
        </div>

        <!-- 버튼 -->
        <div class="btn-box-l mb-5">
          <a href="./php/reserve_input.php" class="btn-l" style="background:var(--green);">예약하기</a>
          <a href="./mypage.php" class="btn-l">마이페이지로</a>
        </div>
      </form>

    </section>
  </main>

  <!-- 공통푸터삽입 -->
  <?php include('./php/include/footer.php');?>
  <!-- 공통바텀바삽입 -->
  <?php include('./php/include/bottom.php');?>


  <!-- 스와이퍼 js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11.1.5/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      //0 ~ 375일때 (작은 모바일일때 설정)
      slidesPerView: 1.5,
      spaceBetween: 12,
      touchRatio: 1,
      simulateTouch: true,
      breakpoints : { //반응형 설정
        376 : { //376~767일때 (큰 모바일일때 설정)
          slidesPerView : 1.5,
          spaceBetween: 12,
        },
        768 : { //768~일때 (태블릿 이상일때 설정)
          slidesPerView : 3.2,
          spaceBetween: 12,
        }
      }
    });
  </script>
</body>
</html>