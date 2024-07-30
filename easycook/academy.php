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
      gap: 10px;
    }
    .filter-dropdown {
      margin-bottom: 20px;
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
    }
  </style>

</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/include/header_sub_category.php');?>


  <!-- 메인서식 -->
  <main>

    <section id="filter">
      <div class="filter-dropdown">
        <label for="type-filter" style="display:none;">종류</label>
        <select id="type-filter" class="form-select" style="width:80px;">
          <option value="">전체</option>
          <option value="국비">국비</option>
          <option value="일반">일반</option>
          <option value="창업">창업</option>
          <option value="취미">취미</option>
          <option value="자격증">자격증</option>
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
    </section>

    <!-- 강의 목록 -->
    <section id="class">
      <div class="mt-5 mb-5">
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
        var type = $('#type-filter').val();
        var date = $('#date-filter').val();
        var difficulty = $('#difficulty-filter').val();

        $.ajax({
          url: './php/academy_filter.php',
          method: 'GET',
          data: {
            category1: '<?php echo $category1; ?>',
            type: type,
            date: date,
            difficulty: difficulty
          },
          success: function(data) {
            $('.card-list-box').html(data);
          }
        });
      }

      $('#type-filter, #date-filter, #difficulty-filter').change(function() {
        loadClasses();
      });

      // 초기 로드
      loadClasses();
    });



  </script>

</body>
</html>