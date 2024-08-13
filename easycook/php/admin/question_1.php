<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이지쿡 | 문의관리</title>
  <?php include('header.php');    ?>
<main>
  <section class="m-center m-auto mb-5 class_size">

    <!-- 부스러기 -->
    <p class="bread">홈 &#x003E; 게시판 관리 &#x003E; <span style="font-weight:bold">문의 관리</span></p>

    <!-- 제목 -->
    <h2 class="text-center mt-4 mb-4">전체 문의 관리</h2>
    <p class="text-center mt-4 mb-4">각 과목 담당 선생님들은 답변을 달아주세요</p>

    <!-- 페이지네이션 만드는 php 수식 -->
    <?php
      $query = "select count(*) from question";
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

    <article class="class_1" style="position:relative;">
      <h3>문의 관리</h3>
      <!-- 검색영역 -->
      <form name="검색하기" method="post" action="./question_search.php" onsubmit="return form_check()">
        <!-- 검색버튼 -->
        <div class="mb-2 admin_search_box">
          <input type="search" placeholder="제목+내용으로 찾기" aria-label="제목+내용으로 찾기" class="admin_search" id="search" name="search">
          <button aria-label="검색" class="btn" type="submit" id="button-addon2" style="border: none;"><i class="bi bi-search"></i></button>        
        </div> 
        <script> // 검색어 유효성 검사
          function form_check(){
          //alert('검색어를 입력하지 않았습니다.')
          if(document.getElementById('search').value.length<1){
          alert('검색어를 입력하지 않았습니다. 확인하세요');
          return false;
          }
          return true;
          }
        </script>

        <!-- 탭컨텐츠 -->
        <div id="tab_con">
          <ul>
            <li><a href="question_1.php" title="전체" class="act">전체</a></li>
            <li><a href="question_2.php" title="질문" >질문</a></li>
            <li><a href="question_3.php" title="답변완료">답변완료</a></li>
          </ul>
        </div>

        <!-- 비동기방식으로 하기 script -->
        <script>
          // 새개의 문서를 하나의 주소로 연결하기
          $(document).ready(function(){
            // 메뉴를 클릭시 함수내용 실행
            $('#tab_con a').click(function(e){
              // 새로고침 방지
              e.preventDefault();

              let url = this.href; //속성값 변수에 담기
              console.log(url); //출력하기

              // 클래스 제거 및 추가하기
              $('#tab_con a.act').removeClass('act');
              $(this).addClass('act');

              $('#container').remove();
              $('#content').load(`${url} #container`).hide().fadeIn('slow');

            });
          });
        </script>

        <!-- 내용 -->
        <div class="mt-2 mb-2 " id="content">
          <div id="container">
            <table class="table table-hover question_list">
              <caption>Q&A 목록</caption>
              <thead class="text-center">
                <tr class="bold_line line50">
                  <th>No.</th>
                  <th>제목</th>
                  <th>상태</th>
                </tr>
              </thead>    
              <!-- 테이블 불러오기 php -->
              <tbody class="more_text">
                <!-- 전체강의 보기 -->
                <?php 
                  $sql = "select * from question order by no DESC limit $start, $list_num;";
                  $result = mysqli_query($conn, $sql);
                  while($q=mysqli_fetch_row($result)){
                    $query = "select * from academy_list where class_no='$q[1]'";
                    $result2 = mysqli_query($conn, $query);
                    $class = mysqli_fetch_array($result2);

                    if(empty($q[7])){
                      print 
                      "<tr>
                      <td><a href='question_view.php?no=".$q[0]."' title='질문보기'>".$q[0]."</a></td>
                      <td style='text-align:left; line-height: 40px;
                      height: 60px;'>
                        <a href='question_view.php?no=".$q[0]."' title='질문보기'>".$q[3]."
                          <span>".$class[3]." | ".$q[2]." | ".date("Y.m.d",strtotime($q[5]))."</span>
                        </a>
                      </td>
                      <td><a href='question_view.php?no=".$q[0]."' title='질문보기'><span class='question_r1'>질문</span></a></td>
                    </tr>";
                    }else{
                      print 
                      "<tr>
                      <td><a href='question_view.php?no=".$q[0]."' title='질문보기'>".$q[0]."</a></td>
                      <td style='text-align:left; line-height: 40px;
                      height: 60px;'>
                        <a href='question_view.php?no=".$q[0]."' title='질문보기'>".$q[3]."
                        <span>".$class[3]." | ".$q[2]." | ".date("Y.m.d",strtotime($q[5]))."</span>
                        </a>
                      </td>
                      <td><a href='question_view.php?no=".$q[0]."' title='질문보기'><span class='question_r2'>답변</span></a></td>
                    </tr>";
                  };
                  };
                ?>
              </tbody>
            </table>

            <!-- 페이지 네이션 -->
            <nav aria-label="페이지네이션" class="padding50">
              <ul class="pagination justify-content-center">
              <?php //페이지네이션이 들어가는 곳
                //이전페이지
                if($page <= 1){ ?> 
                  <li class="page-item"><a href="question_1.php?page=1" class="page-link" title="이전페이지로"><i class="bi bi-chevron-left"></i></a></li>
                  <?php } 
                  else{ ?> 
                  <li class="page-item"><a href="question_1.php?page=<?php echo ($page-1); ?>" title="이전페이지로" class="page-link "><i class="bi bi-chevron-left"></i></a></li>
                  <?php };?> 
                <?php //여기서부터 페이지 번호출력하기
                for($print_page=$s_pageNum;$print_page<=$e_pageNum;$print_page++){?>
                  <li class="page-item"><a href="question_1.php?page=<?php echo $print_page; ?>" title="선택한페이지로" class="page-link">
                    <?php echo $print_page ?>
                  </a></li>
                <?php }; ?>  
                <!-- 다음 버튼 나오는 곳 -->
                <?php if($page>=$total_page){ ?>
                  <li class="page-item"><a href="question_1.php?page=<?php echo $total_page; ?>" title="다음페이지로" class="page-link"><i class="bi bi-chevron-right"></i></a></li>
                <?php }else{ ?>
                  <li class="page-item"><a href="question_1.php?page=<?php echo ($page+1); ?>" title="다음페이지로" class="page-link " ><i class="bi bi-chevron-right"></i></a></li>
              <?php };    ?>    
              </ul>
            </nav>
          
            <div class="mt-5 mb-5" style="position:relative;">
              <a href="index.php" title="메인으로" class="admin_btn admin_btn_yellow position_l_b">메인으로</a>
            </div>
          </div>
        </div> 
      </form>
    </article>
  </section>
<?php
include('footer.php');
?>
</body>
</html>
