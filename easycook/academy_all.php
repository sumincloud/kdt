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

  // 카테고리1 값 읽기
  $category1 = isset($_GET['category1']) ? $_GET['category1'] : '';

  // 필터 값 읽기
  $cate = isset($_GET['cate']) ? htmlspecialchars($_GET['cate']) : '';
  $type = isset($_GET['type']) ? htmlspecialchars($_GET['type']) : '';

  // 정렬 기준 설정
  $sort = isset($_GET['sort']) ? $_GET['sort'] : '최신순'; // 기본값 '최신순'
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이지쿡</title>
  <!-- 공통 헤드정보 삽입 -->
  <?php include('./php/include/head.php'); ?>

  <style>
    /* 필터링 드롭다운 스타일 */
    #filter {
      display: flex;
      padding: 20px;
      max-width: 1200px;
      margin: 0 auto;
    }
    .filter-dropdown .form-select {
      cursor: pointer;
      background-position: right 5px center;
      text-align: center;
      padding: 5px 30px;
      padding-left: 0;
      border-radius: 50px;
    }

    #class{
      padding: 0 20px;
      max-width: 1200px;
      margin: 0 auto;
      min-height: 100vh;
    }
  </style>

</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/include/header_sub.php');?>


  <!-- 메인서식 -->
  <main>

    <section id="filter">
      <div style="display:flex; flex-wrap:wrap; gap: 10px;">
        <div class="filter-dropdown">
          <label for="cate-filter" style="display:none;">카테고리</label>
          <select id="cate-filter" class="form-select" style="width:90px;">
            <option value="">전체</option>
            <option value="기능사" <?php echo $cate == '기능사' ? 'selected' : ''; ?>>요리</option>
            <option value="바리스타" <?php echo $cate == '바리스타' ? 'selected' : ''; ?>>바리스타</option>
            <option value="베이커리" <?php echo $cate == '베이커리' ? 'selected' : ''; ?>>베이커리</option>
          </select>
        </div>
        <div class="filter-dropdown">
          <label for="type-filter" style="display:none;">종류</label>
          <select id="type-filter" class="form-select" style="width:80px;">
            <option value="">종류</option>
            <option value="국비" <?php echo $type == '국비' ? 'selected' : ''; ?>>국비</option>
            <option value="일반" <?php echo $type == '일반' ? 'selected' : ''; ?>>일반</option>
            <option value="창업" <?php echo $type == '창업' ? 'selected' : ''; ?>>창업</option>
            <option value="취미" <?php echo $type == '취미' ? 'selected' : ''; ?>>취미</option>
            <option value="자격증" <?php echo $type == '자격증' ? 'selected' : ''; ?>>자격증</option>
          </select>
        </div>
        <div class="filter-dropdown">
          <label for="date-filter" style="display:none;">날짜</label>
          <select id="date-filter" class="form-select" style="width:80px;">
            <option value="">날짜</option>
            <option value="평일">평일</option>
            <option value="주말">주말</option>
          </select>
        </div>
        <div class="filter-dropdown">
          <label for="difficulty-filter" style="display:none;">난이도</label>
          <select id="difficulty-filter" class="form-select" style="width:90px;">
            <option value="">난이도</option>
            <option value="상">상</option>
            <option value="중">중</option>
            <option value="하">하</option>
          </select>
        </div>
      </div>



      <div class="filter-dropdown" style="margin-left: auto;">
        <label for="sort-filter" style="display:none;">정렬기준</label>
        <select id="sort-filter" class="form-select" style="width:100px; border:none;" onchange="changeSort(this.value)">
          <option value="최신순" <?php echo $sort == '최신순' ? 'selected' : ''; ?>>최신순</option>
          <option value="인기순" <?php echo $sort == '인기순' ? 'selected' : ''; ?>>인기순</option>
          <option value="마감임박순" <?php echo $sort == '마감임박순' ? 'selected' : ''; ?>>마감임박순</option>
        </select>
      </div>
    </section>

    <!-- 강의 목록 -->
    <section id="class">
      <div class="mb-5">
        <div class="card-list-box">
          <!-- 여기에 리스트 들어감 -->
        </div>
      </div>
    </section>

  </main>



  <!-- 공통푸터삽입 -->
  <?php include('./php/include/footer.php');?>

  <!-- 공통바텀바삽입 -->
  <?php include('./php/include/bottom.php');?>


  <!-- 스와이퍼 js -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11.1.5/swiper-bundle.min.js"></script>

  
  <!-- 공통스크립트 연결 -->
  <script src="./script/common.js"></script>


  <script>
    $(document).ready(function() {
      function loadClasses() {
        var cate = $('#cate-filter').val();
        var type = $('#type-filter').val();
        var date = $('#date-filter').val();
        var difficulty = $('#difficulty-filter').val();
        var sort = $('#sort-filter').val();

        $.ajax({
          url: './php/academy_filter.php',
          method: 'GET',
          data: {
            category1: cate,
            type: type,
            date: date,
            difficulty: difficulty,
            sort: sort
          },
          success: function(data) {
            $('.card-list-box').html(data);
          }
        });
      }

      $('#cate-filter, #type-filter, #date-filter, #difficulty-filter, #sort-filter').change(function() {
        loadClasses();
      });

      // 초기 로드
      loadClasses();
    });

    // 최신순, 인기순 정렬기능
    function changeSort(sortValue) {
      const url = new URL(window.location);
      url.searchParams.set('sort', sortValue);
      window.location.href = url.toString();
    }

  </script>

</body>
</html>