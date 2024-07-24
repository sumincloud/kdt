<?php
  // 세션이 이미 시작되었는지 확인
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  include('./php/include/dbconn.php');

  //사용자가 로그인한 경우, 데이터베이스에서 정보 가져옴
  if (isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    
    $sql = "SELECT * FROM register WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = htmlspecialchars($row['name']);
    $profile = htmlspecialchars($row['profile']);

    // 세션 정보를 업데이트
    $_SESSION['name'] = $name;
    $_SESSION['profile'] = $profile;

    // --------------내 강의 정보 불러오는 부분----------------
    // cart 테이블에서 세션ID와 일치하는 class_no 값을 가져오기
    $cart_sql = "SELECT class_no FROM `cart` WHERE id='$id'";
    $cart_result = mysqli_query($conn, $cart_sql);

    // class_no 값을 배열로 저장
    $class_no = array();
    while ($order_row = mysqli_fetch_array($cart_result)) {
      $class_no[] = $order_row['class_no'];
    }
    $class_no_list = implode(",", $class_no);  // 배열을 콤마로 구분된 문자열로 변환

  } else {
  }


?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>찜 목록</title>
  <!-- 공통 헤드정보 삽입 -->
  <?php include('./php/include/head.php'); ?>

  <style>
    /* -----------찜목록 서식------------ */
    section{
      padding: 0 20px;
    }
    section > h2{
      font-size: var(--fs-large);
      font-weight: var(--fw-bold);
      padding: 40px 0 20px 0;
      text-align: center;
    }

  </style>
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/include/header.php');?>

  <main>
    <section>
      <h2>찜 목록</h2>
      <!-- 상품목록 카드 스타일 -->
      <ul class="card-list">
        <!-- 태그에 맞는 강의 가져와서 리스트로 넣기 -->
        <?php if (isset($_SESSION['id'])): ?>
          <?php if (empty($now_class_list)): ?>
            <li>현재 강의가 없습니다.</li>
          <?php else: ?>
            <?php foreach ($now_class_list as $row): ?>
              <li>
                <div>
                  <!-- 강의 썸네일 이미지 -->
                  <a href="./cook_academy_detail.php?class_no=<?= $row['class_no']; ?>" title="상세페이지로 이동">
                    <img src="./uploads/class_detail/<?php echo $row['thumnail_img']; ?>" alt="강의 썸네일 사진">
                  </a>
                  <!-- 강의 이름 -->
                  <div>
                    <h2>
                      <a href="./cook_academy_detail.php?class_no=<?= $row['class_no']; ?>" title="상세페이지로 이동">
                        <?php echo $row['name']; ?>
                      </a>
                    </h2>

                    <!-- 강의 # 태그 -->
                    <p>
                      <span>#<?php echo $row['category2']; ?></span>
                      <span>#<?php echo $row['category1']; ?></span>
                      <span>#<?php echo $row['category3']; ?></span>
                    </p>

                    <!-- 기간 -->
                    <div>
                      <span><?php echo $row['start_date']; ?> ~ <?php echo $row['end_date']; ?></span>
                    </div>
                  </div>
                  <!-- 찜버튼 -->
                  <div class="cart">
                    <img src="./images/common/heart_w.png" alt="찜버튼">
                  </div>
                </div>

                <!-- 버튼이 들어가는 경우에만 삽입 -->
                <div>
                  <div class="btn-box-s mt-4">
                    <button class="btn-s line">실습실 예약</button>
                    <button class="btn-s line">문의하기</button>
                  </div>
                  <div class="btn-box-l mt-2 mb-2">
                    <button class="btn-l">출석체크</button>
                  </div>
                </div>
              </li>
            <?php endforeach; ?>
          <?php endif; ?>
          <?php else: ?>
            <!-- 세션 ID가 없을 때 출력할 메시지 -->
            <li>로그인이 필요한 서비스입니다.</li>
        <?php endif; ?>
      </ul>
    </section>


  </main>

  <!-- 공통 바텀바삽입 -->
  <?php include('./php/include/bottom.php');?>

</body>
</html>