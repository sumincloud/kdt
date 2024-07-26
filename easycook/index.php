<?php
  session_start();
  include('./php/include/dbconn.php');

  if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
  }else{
    $id = null;
  }

  // 사용자가 카트에 담은 상품 목록 가져오기
  $cart_class_no = [];
  if ($id !== null) {
    $cart_sql = "SELECT class_no FROM cart WHERE id = '$id'";
    $cart_result = mysqli_query($conn, $cart_sql);
    while ($cart_row = mysqli_fetch_assoc($cart_result)) {
      $cart_class_no[] = $cart_row['class_no'];
    }
  }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이지쿡</title>
  <!-- 공통 헤드정보 삽입 -->
  <?php include('./php/include/head.php'); ?>

  <!-- 메인서식 연결 -->
  <link rel="stylesheet" href="./css/main.css">

</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/include/header.php');?>


  <!-- 메인서식 -->
  <main>
    <!-- 1. 메인배너 슬라이드 -->
    <section id="sec01">
      <!-- Swiper -->
      <div class="swiper mySwiper1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./images/main/index_sec01_1.png" alt="이미지">
            <div>
              <span>바리스타</span>
              <p>당신의 첫 번째<br>
              커피 커리어</p>
              <p>바리스타 자격증에서 카페창업까지<br>
              120가지 커리큘럼을 경험하세요.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="./images/main/index_sec01_2.png" alt="이미지">
            <div>
              <span>제과제빵</span>
              <p>세상의 모든<br>
              디저트</p>
              <p>제과제빵 원데이부터 전문가 과정까지<br>
              150가지 커리큘럼을 경험하세요.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="./images/main/index_sec01_3.png" alt="이미지">
            <div>
              <span>창업</span>
              <p>외식 창업을 위한<br>
              메뉴개발 프로그램</p>
              <p>성공과 실패는 이유가 있습니다. <br>
              창업 전 전문화된 컨설팅을 받아보세요.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="./images/main/index_sec01_4.png" alt="이미지">
            <div>
              <span>바리스타</span>
              <p>당신의 첫 번째<br>
              커피 커리어</p>
              <p>바리스타 자격증에서 카페창업까지<br>
              120가지 커리큘럼을 경험하세요.</p>
            </div>
          </div>
        </div>
        <div class="slide-btn">
          <div class="swiper-pagination swiper-pagination-fraction">
            <span class="swiper-pagination-current"></span>
            /
            <span class="swiper-pagination-total"></span>
          </div>
          <i class="bi bi-pause swiper-button-play-pause"></i>
        </div>
      </div>
    </section>
    <!-- 2. 카테고리 -->
    <section id="sec02">
      <div>
        <div>
          <a href="#" title="요리">
            <img src="./images/main/index_sec02_1.png" alt="요리">
            <p>요리</p>
          </a>
        </div>
        <div>
          <a href="#" title="커피">
            <img src="./images/main/index_sec02_2.png" alt="커피">
            <p>커피</p>
          </a>
        </div>
        <div>
          <a href="#" title="제과제빵">
            <img src="./images/main/index_sec02_3.png" alt="제과제빵">
            <p>제과제빵</p>
          </a>
        </div>
      </div>

    </section>
    <!-- 3. 실시간 인기 강의 -->
    <section id="sec03">
      <div class="title">
        <h2>실시간 인기 강의</h2>
        <a href="#" title="더 보기">더 보기 +</a>
      </div>
      <div class="mt-3">
        <div class="swiper mySwiper2">
          <div class="swiper-wrapper">
            <?php
              /* 해당 카테고리의 상품 10개 */
              $sql = "SELECT * FROM academy_list WHERE class_status = '개설' LIMIT 10";
              $result = mysqli_query($conn, $sql);
              // 카운터 변수 초기화
              $counter = 1;

              while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <div class="swiper-slide">
                <div class="cart" data-no="<?php echo $row['class_no']; ?>">
                  <img src="./images/common/<?php echo in_array($row['class_no'], $cart_class_no) ? 'heart_r' : 'heart_w'; ?>.png" alt="찜버튼">
                </div>
                <a href="./detail.php?class_no=<?php echo $row['class_no']; ?>" title="상품">
                  <img src="./uploads/class_main/<?php echo $row['thumnail_img']; ?>" alt="이미지">
                  <div class="con-text">
                    <p class="con-title"><?php echo $row['name']; ?></p>
                    <p class="con-sub"><?php echo $row['teacher']; ?></p>
                  </div>
                  <div class="flag">
                    <svg width="28" height="33" fill="none">
                      <path d="m13 24.25-13 10V0h26v34.25l-13-10Z"></path>
                    </svg>
                    <span><?php echo $counter; ?></span>
                  </div>
                </a>
              </div>
            <?php
              // 카운터 증가
              $counter++;
              }
            ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>
    <!-- 4. 마감임박 강의 -->
    <section id="sec04">
      <div class="title">
        <h2>마감임박 강의</h2>
        <a href="#" title="더 보기">더 보기 +</a>
      </div>
      <div class="mt-3">
        <div class="swiper mySwiper3">
          <div class="swiper-wrapper">
            <?php
              /* 현재 날짜부터 start_date까지 얼마 안남은 순으로 상품 10개 */
              $sql = "SELECT *, DATEDIFF(start_date, NOW()) AS days_left 
                      FROM academy_list 
                      WHERE class_status = '개설' 
                      ORDER BY days_left ASC 
                      LIMIT 10";
              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="swiper-slide">
              <div class="cart" data-no="<?php echo $row['class_no']; ?>">
                <img src="./images/common/<?php echo in_array($row['class_no'], $cart_class_no) ? 'heart_r' : 'heart_w'; ?>.png" alt="찜버튼">
              </div>
              <a href="./detail.php?class_no=<?php echo $row['class_no']; ?>" title="상품">
                <img src="./uploads/class_main/<?php echo $row['thumnail_img']; ?>" alt="이미지">
                <div class="con-text">
                  <p class="con-title"><?php echo $row['name']; ?></p>
                  <p class="con-sub"><?php echo $row['detail']; ?></p>
                </div>
              </a>
            </div>
            <?php
              }
            ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>
    <!-- 5. 광고배너 -->
    <section id="sec05">
      <!-- Swiper -->
      <div class="swiper mySwiper4">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="./images/main/index_sec05_1.png" alt="이미지">
          </div>
          <div class="swiper-slide">
            <img src="./images/main/index_sec05_2.png" alt="이미지">
          </div>
          <div class="swiper-slide">
            <img src="./images/main/index_sec05_3.png" alt="이미지">
          </div>
          <div class="swiper-slide">
            <img src="./images/main/index_sec05_4.png" alt="이미지">
          </div>

        </div>
        <div class="slide-btn">
          <div class="swiper-pagination swiper-pagination-fraction">
            <span class="swiper-pagination-current"></span>
            /
            <span class="swiper-pagination-total"></span>
          </div>
        </div>
      </div>
    </section>
    <!-- 6. 수강생 후기 -->
    <section id="sec06">
      <div class="title">
        <h2>수강생 후기</h2>
        <a href="#" title="더 보기">더 보기 +</a>
      </div>
      <div class="mt-3">
        <div class="swiper mySwiper5">
          <div class="swiper-wrapper">
            <!-- <?php 
              //리뷰 불러오는곳
              $sql = "SELECT * FROM review WHERE id='$id'";
              $result = mysqli_query($conn,$sql);
              $total_review= mysqli_num_rows($result);

              while($row = mysqli_fetch_array($result)){ 
                $class_no = $row['class_no'];
                $arry_img = $row['img'];
                
                $sql2 = "select * from academy_list where class_no = '$class_no'";
                $result2 = mysqli_query($conn,$sql2);
                $row2 = mysqli_fetch_array($result2);
            ?> -->
            <div class="swiper-slide">
              <div class="profile">
                <img src="https://dummyimage.com/300x300" alt="이미지">
                <div>
                  <div class="star">
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p>작성자 명</p>
                </div>
              </div>
              <div class="con-text">
                <p>[3회차] 제과제빵 기능사 자격증 취득과정</p>
                <p class="con-title">자격증 취득했어요 !! 너무너무 행복합니다.</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
            </div>
            <!-- <?php } ?> -->



            <div class="swiper-slide">
              <div class="profile">
                <img src="https://dummyimage.com/300x300" alt="이미지">
                <div>
                  <div class="star">
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p>작성자 명</p>
                </div>
              </div>
              <div class="con-text">
                <p>[3회차] 제과제빵 기능사 자격증 취득과정</p>
                <p class="con-title">자격증 취득했어요 !! 너무너무 행복합니다.</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="profile">
                <img src="https://dummyimage.com/300x300" alt="이미지">
                <div>
                  <div class="star">
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p>작성자 명</p>
                </div>
              </div>
              <div class="con-text">
                <p>[3회차] 제과제빵 기능사 자격증 취득과정</p>
                <p class="con-title">자격증 취득했어요 !! 너무너무 행복합니다.</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="profile">
                <img src="https://dummyimage.com/300x300" alt="이미지">
                <div>
                  <div class="star">
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p>작성자 명</p>
                </div>
              </div>
              <div class="con-text">
                <p>[3회차] 제과제빵 기능사 자격증 취득과정</p>
                <p class="con-title">자격증 취득했어요 !! 너무너무 행복합니다.</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="profile">
                <img src="https://dummyimage.com/300x300" alt="이미지">
                <div>
                  <div class="star">
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p>작성자 명</p>
                </div>
              </div>
              <div class="con-text">
                <p>[3회차] 제과제빵 기능사 자격증 취득과정</p>
                <p class="con-title">자격증 취득했어요 !! 너무너무 행복합니다.</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="profile">
                <img src="https://dummyimage.com/300x300" alt="이미지">
                <div>
                  <div class="star">
                    <i class="bi bi-star-fill active"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                  </div>
                  <p>작성자 명</p>
                </div>
              </div>
              <div class="con-text">
                <p>[3회차] 제과제빵 기능사 자격증 취득과정</p>
                <p class="con-title">자격증 취득했어요 !! 너무너무 행복합니다.</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>

    </section>
    <!-- 7. 인기 요리 강의 -->
    <section id="sec07">
      <div class="title">
        <h2>인기 요리 강의</h2>
        <a href="#" title="더 보기">더 보기 +</a>
      </div>
      <div class="mt-3">
        <div class="swiper mySwiper3">
          <div class="swiper-wrapper">
            <?php
              /* 해당 카테고리의 상품 10개 */
              $sql = "SELECT * FROM academy_list WHERE category1 = '요리' LIMIT 10";
              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="swiper-slide">
              <div class="cart" data-no="<?php echo $row['class_no']; ?>">
                <img src="./images/common/<?php echo in_array($row['class_no'], $cart_class_no) ? 'heart_r' : 'heart_w'; ?>.png" alt="찜버튼">
              </div>
              <a href="./detail.php?class_no=<?php echo $row['class_no']; ?>" title="상품">
                <img src="./uploads/class_main/<?php echo $row['thumnail_img']; ?>" alt="이미지">
                <div class="con-text">
                  <p class="con-title"><?php echo $row['name']; ?></p>
                  <p class="con-sub"><?php echo $row['detail']; ?></p>
                </div>
              </a>
            </div>
            <?php
              }
            ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>
    <!-- 8. 인기 바리스타 강의 -->
    <section id="sec08">
      <div class="title">
        <h2>인기 바리스타 강의</h2>
        <a href="#" title="더 보기">더 보기 +</a>
      </div>
      <div class="mt-3">
        <div class="swiper mySwiper3">
          <div class="swiper-wrapper">
            <?php
              /* 해당 카테고리의 상품 10개 */
              $sql = "SELECT * FROM academy_list WHERE category1 = '바리스타' LIMIT 10";
              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="swiper-slide">
              <div class="cart" data-no="<?php echo $row['class_no']; ?>">
                <img src="./images/common/<?php echo in_array($row['class_no'], $cart_class_no) ? 'heart_r' : 'heart_w'; ?>.png" alt="찜버튼">
              </div>
              <a href="./detail.php?class_no=<?php echo $row['class_no']; ?>" title="상품">
                <img src="./uploads/class_main/<?php echo $row['thumnail_img']; ?>" alt="이미지">
                <div class="con-text">
                  <p class="con-title"><?php echo $row['name']; ?></p>
                  <p class="con-sub"><?php echo $row['detail']; ?></p>
                </div>
              </a>
            </div>
            <?php
              }
            ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>
    <!-- 9. 인기 제과제빵 강의 -->
    <section id="sec09">
      <div class="title">
        <h2>인기 제과제빵 강의</h2>
        <a href="#" title="더 보기">더 보기 +</a>
      </div>
      <div class="mt-3">
        <div class="swiper mySwiper3">
          <div class="swiper-wrapper">
            <?php
              /* 해당 카테고리의 상품 10개 */
              $sql = "SELECT * FROM academy_list WHERE category1 = '제과제빵' LIMIT 10";
              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="swiper-slide">
              <div class="cart" data-no="<?php echo $row['class_no']; ?>">
                <img src="./images/common/<?php echo in_array($row['class_no'], $cart_class_no) ? 'heart_r' : 'heart_w'; ?>.png" alt="찜버튼">
              </div>
              <a href="./detail.php?class_no=<?php echo $row['class_no']; ?>" title="상품">
                <img src="./uploads/class_main/<?php echo $row['thumnail_img']; ?>" alt="이미지">
                <div class="con-text">
                  <p class="con-title"><?php echo $row['name']; ?></p>
                  <p class="con-sub"><?php echo $row['detail']; ?></p>
                </div>
              </a>
            </div>
            <?php
              }
            ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>
    <!-- 10. 모바일앱 띠배너 -->
    <section id="sec10">
      <img src="./images/main/index_sec10_1.png" alt="이미지">
    </section>
    <!-- 11. 국비과정 베스트 -->
    <section id="sec11">
      <div class="title">
        <h2>국비과정 베스트</h2>
        <a href="#" title="더 보기">더 보기 +</a>
      </div>
      <div class="mt-3 row">
        <?php
          /* 해당 카테고리의 상품 3개 */
          $sql = "SELECT * FROM academy_list WHERE category2 = '국비' LIMIT 3";
          $result = mysqli_query($conn, $sql);

          while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <style>
          #sec11 .col-xl{
            background-image: url("<?php echo './uploads/class_main/' . $row['thumnail_img']; ?>");
          }
        </style>
          <div class="col-xl" onclick="location.href='./detail.php?class_no=<?php echo $row['class_no']; ?>';" style="cursor: pointer;">
            <div>
              <p><?php echo $row['name']; ?></p>
              <p><?php echo $row['detail']; ?>
              </p>
              <span>
                자세히 보기
                <i class="bi bi-chevron-right"></i>
              </span>
            </div>
          </div>
        <?php
          }
        ?>
      </div>

    </section>
    <!-- 12. 커뮤니티 -->
    <section id="sec12">
      <div class="title">
        <h2>커뮤니티</h2>
        <a href="#" title="더 보기">더 보기 +</a>
      </div>
      <div class="tab mt-3">
        <ul>
          <li class="tab-item">
            <button class="tab-link active" data-tab-target="#tab1" type="button">탭1</button>
          </li>
          <li class="tab-item">
            <button class="tab-link" data-tab-target="#tab2" type="button">탭2</button>
          </li>
          <li class="tab-item">
            <button class="tab-link" data-tab-target="#tab3" type="button">탭3</button>
          </li>
        </ul>
        <div class="tab_con">
          <div class="active" id="tab1">
            <ul class="list">
              <li>
                <span>07.01</span>
                <a href="#" title="제목">탭1 제목을 입력해주세요.</a>
                <span class="active">N</span>
              </li>
              <li>
                <span>06.25</span>
                <a href="#" title="제목">탭1 제목을 입력해주세요.</a>
                <span class="active">N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">탭1 제목을 입력해주세요.</a>
                <span>N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">탭1 제목을 입력해주세요.</a>
                <span>N</span>
              </li>
            </ul>
          </div>
          <div id="tab2">
            <ul class="list">
              <li>
                <span>07.01</span>
                <a href="#" title="제목">탭2 제목을 입력해주세요.</a>
                <span class="active">N</span>
              </li>
              <li>
                <span>06.25</span>
                <a href="#" title="제목">탭2 제목을 입력해주세요.</a>
                <span>N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">탭2 제목을 입력해주세요.</a>
                <span>N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">탭2 제목을 입력해주세요.</a>
                <span>N</span>
              </li>
            </ul>
          </div>
          <div id="tab3">
            <ul class="list">
              <li>
                <span>07.01</span>
                <a href="#" title="제목">탭3 제목을 입력해주세요.</a>
                <span class="active">N</span>
              </li>
              <li>
                <span>06.25</span>
                <a href="#" title="제목">탭3 제목을 입력해주세요.</a>
                <span class="active">N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">탭3 제목을 입력해주세요.</a>
                <span>N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">탭3 제목을 입력해주세요.</a>
                <span>N</span>
              </li>
            </ul>
          </div>
        </div>
        <script>
          $(document).ready(function() {
            $('.tab-link').on('click', function() {
              $('.tab-link').removeClass('active');
              $(this).addClass('active');
              
              // 모든 탭 콘텐츠 숨기기
              $('.tab_con > div').removeClass('active');
              // 데이터 속성으로 타겟팅된 탭 콘텐츠 보이기
              var target = $(this).data('tab-target');
              $(target).addClass('active');
            });
          });
        </script>
      </div>

    </section>

  </main>



  <!-- 공통푸터삽입 -->
  <?php include('./php/include/footer.php');?>

  <!-- 공통바텀바삽입 -->
  <?php include('./php/include/bottom.php');?>


  <!-- 스와이퍼 js -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11.1.5/swiper-bundle.min.js"></script>

  
  <!-- 공통스크립트 연결 -->
  <script src="./script/common.js"></script>
  <!-- 메인스크립트 연결 -->
  <script src="./script/main.js"></script>



</body>
</html>