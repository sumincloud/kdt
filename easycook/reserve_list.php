<?php
  include('./php/include/dbconn.php');

    // 세션이 이미 시작되었는지 확인
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
    if (isset($_SESSION['id'])) {
      $id = $_SESSION['id'];
      $name = $_SESSION['name'];
    }else{
      $id = null;
    }

    // question count
    $query = "select count(*) from room WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $max_Num = mysqli_fetch_array($result);

    // 전체 목록의 갯수
    $num = $max_Num[0];
    //한 페이지에 보여질 게시물 개수
    $list_num = 5;    
    //이전, 다음 버튼 클릭시 나오는 페이지 수
    $page_num =3;    
    //현재 페이지
    $page = isset($_GET["page"])? $_GET["page"] : 1;    
    // 전체페이지수 계산
    $total_page = ceil($num / $list_num); 
    //전체블럭 계산
    $total_block = ceil($total_page / $page_num);    
    //현재블럭번호 계산
    $now_block = ceil($page / $page_num);    
    //블럭당 시작페이지 번호$start
    $s_pageNum = ($now_block - 1) * $page_num + 1;    
    //데이터가 0인 경우
    if($s_pageNum <= 0){ $s_pageNum = 1; };    
    //블럭당 마지막페이지 번호
    $e_pageNum = $now_block * $page_num;    
    //마지막 번호가 전체 페이지번호보다 크다면 동일한 값을 준다.
    if($e_pageNum > $total_page){ $e_pageNum = $total_page; };

    $start = ($page - 1) * $list_num;
    $cnt = $start + 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <!-- 공통 헤드정보 삽입 -->
    <?php include('./php/include/head.php'); ?>
    <!-- 서식 연결 -->
    <link rel="stylesheet" href="./css/sub.css">
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/include/header.php');?>

  <!-- 나의 문의 내역 -->
  <main>
    <section class="reserve_list">
      <p>홈&#62; 마이페이지&#62; <b>나의 예약</b></p>
      <h2>나의 예약 총 <?php echo $max_Num[0]; ?>개</h2>
      <!-- 테이블 시작 -->
      <article class="reserve_detail">
        <table class="table table-hover table-responsive reserve_table mt-3 mb-3">
          <caption>나의 문의 리스트</caption>
          <thead>
            <tr>
              <th>번호</th>
              <th>예약내용</th>
              <th>상태</th>
            </tr>
          </thead>
          <tbody>
          <!-- 전체강의 보기 -->
          <?php 
            // 현재시간
            $timeNow = date('H:i:s');
            // echo $timeNow;

            //room 불러오는곳
            $sql = "select * from room where id='$id' order by no DESC limit $start, $list_num;";
            $result = mysqli_query($conn, $sql);
            while($q=mysqli_fetch_row($result)){

            //시간 비교하기
            $qTime = new DateTime($q[4]);

              if($qTime < $timeNow){
                print 
              "<tr>
                <td>
                  <a href='inquire_view.php?no=".$q[0]."' title=''>".$max_Num[0]."</a>
                </td>
                <td>
                  <a href='inquire_view.php?no=".$q[0]."' title=''>"
                  .date("Y-m-d",strtotime($q[3]))."&#x3000;"
                  .date("H:i",strtotime($q[4]))."~".date("H:i",strtotime($q[5]))."&#x3000;"
                  .$q[2]."호&#x3000;"
                  ."</a>
                </td>
                <td>
                  <a href='inquire_view.php?no=".$q[0]."' title=''>
                    <span class='question_r1'>예약취소</span>
                  </a>
                </td>
              </tr>";
              }else{
                print 
              "<tr>
                <td><a href=inquire_view.php?no=".$q[0]."' title=''>".$max_Num[0]."</a></td>
                <td>
                  <a href='inquire_view.php?no=".$q[0]."' title=''>"
                  .date("Y-m-d",strtotime($q[3]))."&#x3000;"
                  .date("H:i",strtotime($q[4]))."~".date("H:i",strtotime($q[5]))."&#x3000;"
                  .$q[2]."호&#x3000;"
                  ."</a>
                </td>
                <td>
                  <a href='qinquire_view.php?no=".$q[0]."' title=''><span class='question_r2'>종료</span></a>
                </td>
              </tr>";
            };
            $max_Num[0] --;
            };
          ?>
        </table>

        <!-- 페이지 네이션 -->
        <nav aria-label="페이지네이션" class="padding50 mt-3 mb-3" style="position: relative;">
          <ul class="pagination justify-content-center">

          <?php //페이지네이션이 들어가는 곳
            //이전페이지
            if($page <= 1){ ?> 
              <li class="page-item"><a href="notice_list.php?class_no='<?echo $class_no;?>'page=<?php echo ($page-1); ?>" class="page-link"><i class="bi bi-chevron-left"></i></a></li>
              <?php } 
              else{ ?> 
              <li class="page-item"><a href="notice_list.php?class_no='<?echo $class_no;?>'page<?php echo ($page-1); ?>" class="page-link "><i class="bi bi-chevron-left"></i></a></li>
              <?php };
              ?> 
          <?php //여기서부터 페이지 번호출력하기
            for($print_page=$s_pageNum;$print_page<=$e_pageNum;$print_page++){?>
              <li class="page-item"><a href="notice_list.php?class_no='<?echo $class_no;?>'page<?php echo $print_page; ?>" class="page-link">
                <?php echo $print_page ?>
              </a></li>
            <?php }; ?>  

            <!-- 다음 버튼 나오는 곳 -->
            <?php if($page>=$total_page){ ?>
              <li class="page-item"><a href="notice_list.php?class_no='<?echo $class_no;?>'page<?php echo $total_page; ?>" title="다음페이지로" class="page-link"><i class="bi bi-chevron-right"></i></i></a></li>
            <?php }else{ ?>
              <li class="page-item"><a href="notice_list.php?class_no='<?echo $class_no;?>'page<?php echo ($page+1); ?>" class="page-link ">
              <i class="bi bi-chevron-right"></i></a></li>
          <?php };    
          ?>    
          </ul>
        </nav>  

        <!-- 바로가기 가기 -->
        <div class="btn-box-l mb-5">
          <a href="reserve_check.php" class="btn-l">예약하기</a>
          <a href="mypage.php" class="btn-l">마이페이지로</a>
        </div>
      </article>
    </section>
  </main>

  <!-- 공통푸터삽입 -->
  <?php include('./php/include/footer.php');?>
  <!-- 공통바텀바삽입 -->
  <?php include('./php/include/bottom.php');?>

</body>
</html>