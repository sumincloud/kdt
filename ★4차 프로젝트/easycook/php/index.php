<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="요리 자격증, 요리 강의, 커피 자격증, 커피 강의, 베이커리 자격증, 베이커리 강의, 온라인 요리 수업, 요리 학원, 커피 학원, 베이커리 학원, 이지쿡, easycook, 요리 수강, 커피 수강, 베이킹 수강, 요리 온라인 강의, 커피 온라인 강의, 베이킹 온라인 강의, 요리 레시피, 베이킹 레시피">
  <meta name="description" content="이지쿡에서 요리, 커피, 베이커리 자격증과 수강, 온라인 강의를 배워보세요. 전문 강사진의 체계적인 교육으로 전문가가 되는 길을 안내합니다.">
  <meta name="Robots" content="Index, Follow">
  <meta http-equiv="Subject" content="이지하게 배우자, 이지쿡">
  <meta http-equiv="Title" content="이지쿡">
  <title>이지쿡</title>
  <!-- 부트스트랩 css연결하기 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- 부트스트랩 js연결하기 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- 부트스트랩 아이콘폰트 연결 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- 스와이퍼 css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <!-- 제이쿼리 -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>



  <!-- 초기화서식 연결 -->
  <link rel="stylesheet" href="../css/reset.css">
  <!-- 베이스서식 연결 -->
  <link rel="stylesheet" href="../css/base.css">
  <!-- 공통서식 연결 -->
  <link rel="stylesheet" href="../css/common.css">
  <!-- 메인서식 연결 -->
  <link rel="stylesheet" href="../css/main.css">


  
  <!-- 파비콘 -->
  <!-- <link rel="manifest" href="../images/favicon/webmanifest.json"> -->
  <link rel="apple-touch-icon" href="../images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="48x48" href="../images/favicon/favicon-48x48.png">
  <link rel="icon" type="image/png" sizes="192x192" href="../images/favicon/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="../images/favicon/android-chrome-512x512.png">
  <link rel="shortcut icon" href="../images/favicon/favicon.ico">
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./header.php')?>

  <!-- 메인서식 -->
  <main>
    <!-- 1. 메인배너 슬라이드 -->
    <section id="sec01">
      <!-- Swiper -->
      <div class="swiper mySwiper1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="../images/index_sec01_1.png" alt="이미지">
            <div>
              <span>바리스타</span>
              <p>당신의 첫 번째<br>
              커피 커리어</p>
              <p>바리스타 자격증에서 카페창업까지<br>
              120가지 커리큘럼을 경험하세요.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="../images/index_sec01_2.png" alt="이미지">
            <div>
              <span>제과제빵</span>
              <p>세상의 모든<br>
              디저트</p>
              <p>제과제빵 원데이부터 전문가 과정까지<br>
              150가지 커리큘럼을 경험하세요.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="../images/index_sec01_3.png" alt="이미지">
            <div>
              <span>창업</span>
              <p>외식 창업을 위한<br>
              메뉴개발 프로그램</p>
              <p>성공과 실패는 이유가 있습니다. <br>
              창업 전 전문화된 컨설팅을 받아보세요.</p>
            </div>
          </div>
          <div class="swiper-slide">
            <img src="../images/index_sec01_4.png" alt="이미지">
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
            <img src="../images/index_sec02_1.png" alt="요리">
            <p>요리</p>
          </a>
        </div>
        <div>
          <a href="#" title="커피">
            <img src="../images/index_sec02_2.png" alt="커피">
            <p>커피</p>
          </a>
        </div>
        <div>
          <a href="#" title="제과제빵">
            <img src="../images/index_sec02_3.png" alt="제과제빵">
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
            <div class="swiper-slide">
              <img src="../images/index_sec03_1.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">[여름학기] 바리스타 자격증 취득반 (4주)</p>
                <p class="con-sub">강사명</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_r.png" alt="찜버튼">
              </div>
              <div class="flag">
                <svg width="28" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z"></path>
                </svg>
                <span>1</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec03_2.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">[4회차] 제과제빵 기능사 자격증 취득과정</p>
                <p class="con-sub">강사명</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
              <div class="flag">
                <svg width="28" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z"></path>
                </svg>
                <span>2</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec03_3.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">[여름학기] 일식조리 기능사 자격증 취득반(12주)</p>
                <p class="con-sub">강사명</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
              <div class="flag">
                <svg width="28" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z"></path>
                </svg>
                <span>3</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec03_4.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">[4회차] 제과제빵 기능사 자격증 취득과정</p>
                <p class="con-sub">강사명</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
              <div class="flag">
                <svg width="28" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z"></path>
                </svg>
                <span>4</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec03_5.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">[여름학기] 한식조리 기능사 자격증 취득반(8주)</p>
                <p class="con-sub">강사명</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
              <div class="flag">
                <svg width="28" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z"></path>
                </svg>
                <span>5</span>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec03_6.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">[4회차] 제과제빵 기능사 자격증 취득과정</p>
                <p class="con-sub">강사명</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
              <div class="flag">
                <svg width="28" height="33" fill="none">
                  <path d="m13 24.25-13 10V0h26v34.25l-13-10Z"></path>
                </svg>
                <span>6</span>
              </div>
            </div>
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
            <div class="swiper-slide">
              <img src="../images/index_sec03_4.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec03_5.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec03_6.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec03_6.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec03_6.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec03_6.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
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
            <img src="../images/index_sec05_1.png" alt="이미지">
          </div>
          <div class="swiper-slide">
            <img src="../images/index_sec05_2.png" alt="이미지">
          </div>
          <div class="swiper-slide">
            <img src="../images/index_sec05_3.png" alt="이미지">
          </div>
          <div class="swiper-slide">
            <img src="../images/index_sec05_4.png" alt="이미지">
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
            <div class="swiper-slide">
              <img src="../images/index_sec07_1.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_1.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_1.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_1.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_1.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_1.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>
    <!-- 8. 인기 커피 수강 -->
    <section id="sec08">
      <div class="title">
        <h2>인기 커피 수강</h2>
        <a href="#" title="더 보기">더 보기 +</a>
      </div>
      <div class="mt-3">
        <div class="swiper mySwiper3">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="../images/index_sec07_2.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_2.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_2.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_2.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_2.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_2.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>
    <!-- 9. 인기 베이커리 수강 -->
    <section id="sec09">
      <div class="title">
        <h2>인기 베이커리 수강</h2>
        <a href="#" title="더 보기">더 보기 +</a>
      </div>
      <div class="mt-3">
        <div class="swiper mySwiper3">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="../images/index_sec07_3.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_3.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_3.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_3.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_3.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
            <div class="swiper-slide">
              <img src="../images/index_sec07_3.png" alt="이미지">
              <div class="con-text">
                <p class="con-title">수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목수강제목</p>
                <p class="con-sub">수강내용수강내용수강내용수강내용수강내용수강내용수강내용</p>
              </div>
              <div class="cart">
                <img src="../images/common/heart_w.png" alt="찜버튼">
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </section>
    <!-- 10. 모바일앱 띠배너 -->
    <section id="sec10">
      <img src="../images/index_sec10_1.png" alt="이미지">
    </section>
    <!-- 11. 국비과정 베스트 -->
    <section id="sec11">
      <div class="title">
        <h2>국비과정 베스트</h2>
        <a href="#" title="더 보기">더 보기 +</a>
      </div>
      <div class="mt-3 row">
        <div class="col-xl">
          <div>
            <p>커피 제조마스터<br>
            1급 자격증</p>
            <p>
              커피의 기본원리 이해와 에스프레소 추출 스티밍 훈련과 제반기술을 교육하는 과정입니다. 총 3주간 교육프로그램이 예정되어 있으며 커피의 기본 베이스부터 전문가 수준까지 양성가능한 코스입니다.
            </p>
            <a href="#" title="자세히보기">
              자세히 보기
              <i class="bi bi-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="col-xl">
          <div>
            <p>한식 조리 기능사<br>
            자격증</p>
            <p>
            한식의 기본원리 이해와 한식 메뉴계획에따라 식재료를 선정,구매,검수,보관 및 저장하고 조리할 수 있습니다. 총 5주간 교육프로그램이 예정되어 있으며 한식의 기본 베이스부터 전문가 수준까지 양성가능한 코스입니다.
            </p>
            <a href="#" title="자세히보기">
              자세히 보기
              <i class="bi bi-chevron-right"></i>
            </a>
          </div>
        </div>
        <div class="col-xl">
          <div>
            <p>베이킹 마스터<br>
            패키지</p>
            <p>
              베이킹 기초와 심화교육까지 올인원으로 배우는 마스터 패키지 과정입니다. 총 5주간 교육프로그램이 예정되어 있으며 베이킹의 기본 베이스부터 전문가 수준까지 양성가능한 코스입니다.
            </p>
            <a href="#" title="자세히보기">
              자세히 보기
              <i class="bi bi-chevron-right"></i>
            </a>
          </div>
        </div>
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



      <!-- <div class="container mt-3">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#notice" type="button">공지사항</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#reviews" type="button">수강생 후기</button>
          </li>
          <li class="nav-item">
            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#faq" type="button">자주 묻는 질문</button>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="notice">
            <ul class="list">
              <li>
                <span>07.01</span>
                <a href="#" title="제목">새로운 공지사항입니다</a>
                <span class="active">N</span>
              </li>
              <li>
                <span>06.25</span>
                <a href="#" title="제목">중요 업데이트 안내</a>
                <span class="active">N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">서비스 점검 예정</a>
                <span>N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">서비스 점검 예정</a>
                <span>N</span>
              </li>
            </ul>
          </div>
          <div class="tab-pane" id="reviews">
            <ul class="list">
              <li>
                <span>07.01</span>
                <a href="#" title="제목">수강생 후기 1</a>
                <span class="active">N</span>
              </li>
              <li>
                <span>06.25</span>
                <a href="#" title="제목">수강생 후기 2</a>
                <span>N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">수강생 후기 3</a>
                <span>N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">수강생 후기 3</a>
                <span>N</span>
              </li>
            </ul>
          </div>
          <div class="tab-pane" id="faq">
            <ul class="list">
              <li>
                <span>07.01</span>
                <a href="#" title="제목">자주 묻는 질문 1</a>
                <span class="active">N</span>
              </li>
              <li>
                <span>06.25</span>
                <a href="#" title="제목">자주 묻는 질문 2</a>
                <span class="active">N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">자주 묻는 질문 3</a>
                <span>N</span>
              </li>
              <li>
                <span>06.15</span>
                <a href="#" title="제목">자주 묻는 질문 3</a>
                <span>N</span>
              </li>
            </ul>
          </div>
        </div>
      </div> -->
    </section>

  </main>



  <!-- 공통푸터삽입 -->
  <?php include('./footer.php')?>

  <!-- 공통바텀바삽입 -->
  <?php include('./bottom.php')?>


  <!-- 스와이퍼 js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- 메인스크립트 연결 -->
  <script src="../script/main.js"></script>



</body>
</html>