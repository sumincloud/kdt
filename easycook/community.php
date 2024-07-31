<?php
  include('./php/include/dbconn.php');

  $comu = isset($_GET['comu']) ? trim($_GET['comu']) : '';
  $tab = isset($_GET['tab']) ? trim($_GET['tab']) : '';

  $sql = "select * from review";
  $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이지쿡 후기</title>
    <!-- 공통 헤드정보 삽입 -->
    <?php include('./php/include/head.php'); ?>
    <!--sub 페이지 css 하나에 우겨넣기-->
    <link rel="stylesheet" href="./css/sub.css" type="text/css">
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/include/header_sub_category.php');?>

  <main>
    <!--이거 클래스명이 이렇게 되면 안될것같은데-->
    <section class="sub_header">
      <h2 class="hide">커뮤니티 페이지</h2>
      <article class="tab_con intro">
        <h2 class="hide">커뮤니티 페이지</h2>
        <ul class="tab_menu">
          <li><a href="?comu=<?php echo $comu; ?>&tab=후기" class="<?php echo ($tab == '후기') ? 'on' : ''; ?>">후기</a></li>
          <li><a href="?comu=<?php echo $comu; ?>&tab=FAQ" class="<?php echo ($tab == 'FAQ') ? 'on' : ''; ?>">FAQ</a></li>
          <li><a href="?comu=<?php echo $comu; ?>&tab=QA" class="<?php echo ($tab == 'QA') ? 'on' : ''; ?>">Q&A</a></li>
          <li><a href="?comu=<?php echo $comu; ?>&tab=상담신청" class="<?php echo ($tab == '상담신청') ? 'on' : ''; ?>">상담신청</a></li>
          <li><a href="?comu=<?php echo $comu; ?>&tab=공지사항" class="<?php echo ($tab == '공지사항') ? 'on' : ''; ?>">공지사항</a></li>
        </ul>
      </article>
    </section>

    <article>
      <div class="community_con">
        <?php if($tab == '후기') {?>
          <div class="community">
            <ul>
              <?php 
                while($row = mysqli_fetch_array($result)){ 
                  $class_no = $row['class_no'];
                  $arry_img = $row['img'];
                  $id = $row['id'];
                  
                  // echo $class_no;
                  $sql2 = "select * from academy_list where class_no = '$class_no'";
                  $result2 = mysqli_query($conn,$sql2);
                  $row2 = mysqli_fetch_array($result2);
                  //강으명은 row2['name']로 

                  //이건 프로필 가져올 sql문
                  $sql3 = "select * from register where id = '$id'";
                  $result3 = mysqli_query($conn,$sql3);
                  $row3 = mysqli_fetch_array($result3);
              ?>
                <li>
                  <p class="profile_img_size">
                    <!--이미지 바꾸기-->
                    <!-- <img src="./images/sub/user.png"> -->
                    <img src="./uploads/profile/<?php echo $row3['profile'] ?>">
                  </p>

                  <div>
                    <p>
                      <?php echo $row["name"] ?>
                    </p>
                    <p>
                      <!--강의명-->
                      <?php echo $row2["name"] ?>
                    </p>
                  </div>
                  
                  <!--별점-->
                  <p class="day_gray">
                  <?php
                    $review_star = "";
                    $star = $row["star"];
                    for($i = 0; $i < 5; $i++){
                      if($i < $star){
                        $review_star .= '<i class="bi bi-star-fill active"></i>' ;
                      }else{
                        $review_star .= '<i class="bi bi-star-fill"></i>' ;
                      }
                    }
                  ?>
                  <span class="star"><?php echo $review_star; ?></span>

                  <!--몇개월전-->
                  <?php
                    $datetime = $row["datetime"];
                    $date = new DateTime($datetime);

                    $today = new DateTime();
                    $interval = $today->diff($date);

                    // 차이 계산
                    $years = $interval->y;
                    $months = $interval->m;
                    $days = $interval->d;
                    $hours = $interval->h;
                    $minutes = $interval->i;
                    $seconds = $interval->s;

                    // 결과 출력
                    if ($years > 0) {
                        echo "{$years}년 전";
                    } elseif ($months > 0) {
                        echo "{$months}개월 전";
                    } elseif ($days > 0) {
                        echo "{$days}일 전";
                    } elseif ($hours > 0) {
                        echo "{$hours}시간 전";
                    } elseif ($minutes > 0) {
                        echo "{$minutes}분 전";
                    } else {
                        echo "{$seconds}초 전";
                    }
                  ?>
                  </p>

                  <!--내용-->
                  <p class="comu_review"><?php echo $row['review']; ?></p>

                  <!--사진-->
                  <p class="review_img">
                    <?php foreach (explode(",",$row['img']) as $file) { ?>
        
                      <?php if($file == ''){ ?>
                        <img src="./uploads/review/<?php echo $file; ?>" alt="" class="hide">
                      <?php }else{ ?>
                        <img src="./uploads/review/<?php echo $file; ?>" alt="">
                      <?php } ?>
        
                    <?php } ?>
                  </p>

                </li>
              <?php } ?>
            </ul>
          </div>
        <?php }else if($tab == 'FAQ') {?>
          <!-- 준비중페이지 -->
          <?php include('./php/include/ready.php');?>
        <?php }else if($tab == 'QA') { ?>
          <!-- 준비중페이지 -->
          <?php include('./php/include/ready.php');?>
        <?php }else if($tab == '상담신청') { ?>
          <article id="page">
            <div id="page2" class="inquire">
              <h2>전화 상담신청 </h2>
              <form name="" method="post" action="./php/inquire_send.php">
                <!--강의 내용 hidden으로 담아서 보내기-->
                <input type="hidden" value="<?php echo $row['name']?>" name="academy_name">
                <label for="inquire_name" >이름</label>
                <input type="text" value="" name="inquire_name" id="inquire_name" >
                <br>
                <label for="inquire_phone" >전화번호</label>
                <input type="text" value="" name="inquire_phone" id="inquire_phone" >
                <p>
                  <input type="submit" value="문의하기">
                </p>
              </form>
            </div>
          </article>
        <?php }else if($tab == '공지사항') { ?>
          <!-- 준비중페이지 -->
          <?php include('./php/include/ready.php');?>
        <?php } ?>
      </div>

    </article>
  </main>

  <!-- 공통푸터삽입 -->
  <?php include('./php/include/footer.php');?>
  <!-- 공통바텀바삽입 -->
  <?php include('./php/include/bottom.php');?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  
  <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=ff7262ce2f59072e4630050ca54a0a7c"></script>
  <script src="./script/kakaomap_api.js"></script>


  <script>  
    let tab_mnu = $('.tab_mnu')
    tab_mnu.click(function(){

    //선택한 메뉴에 서식을 적용하기 그외 다른 a요소에 서식을 제거한다. 선생님 정답
    $(this).addClass('on').parent().siblings().find('a').removeClass('on')

    })
  </script>

</body>
</html>