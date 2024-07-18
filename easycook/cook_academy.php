<?php
  include('./php/include/dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이지쿡 소개</title>
    <!-- 공통 헤드정보 삽입 -->
    <?php include('./php/include/head.php'); ?>
    <!-- 메인서식 연결 -->
    <link rel="stylesheet" href="./css/main.css" type="text/css">
    <!--sub 페이지 css 하나에 우겨넣기-->
    <link rel="stylesheet" href="./css/sub.css" type="text/css">
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/include/header.php');?>

  <main>
    <!--이거 클래스명이 이렇게 되면 안될것같은데-->
  <section class="sub_header">
    <select name="" onchange="if(this.value) location.href=(this.value);">
      <option value="./cook_academy.php">요리</option>
      <option value="./intro.php">소개</option>
      <option value="./cook_academy.php">요리</option>
      <option value="./coffee_academy.php">바리스타</option>
      <option value="./bread_academy.php">제과제빵</option>
      <option value="./community.php">커뮤니티</option>
    </select>
      <h2 class="hide">카테고리 소개페이지</h2>
      <!--공통 탭컨텐츠 클래스 tab_con   카테고리별 글래스 지정해서 스타일적용하기-->
      <article class="tab_con cook">
        <h2 class="hide">카테고리 소개페이지</h2>
        <ul>
          <li>
            <a href="#" title="국비" class="on tab_mnu">국비</a>

            <!-- 여기에도 개별 클래스 지정-->
            <div class="con cook_con">
              <!--태그에 맞는 강의 가져와서 리스트로 넣기-->
              <!-- 반복문을 사용해서 가져온다 -->
              <?php
                $sql = "select * from academy_list where category2='자격증' ";
                $result = mysqli_query($conn, $sql);

                while($row = mysqli_fetch_array($result)){
              ?>
              <ul >

                <li>
                  <!--강의 썸네일 이미지 여기-->
                  <img src="./uploads/class_detail/<?php echo $row["thumnail_img"] ?>" alt="강의 썸네일 사진">
                  <!--강의 이름-->

                  <div>
                    <form action="">
                      <h2>
                        <a href="./cook_academy_detail.php?class_no=<?= $row['class_no']; ?>" title="상세페이지로 이동">
                          <?php echo $row["name"] ?>
                        </a>
                      </h2>
    
                      <!--강의 # 여기는 position주기 li에다가 relative를 줘서 여기는 absolute 하기-->
                      <span>#<?php echo $row["category2"] ?></span>
                      <span>#<?php echo $row["category1"] ?></span>
                      <!--이거는 넣을지말지 물어보기-->
                      <span>#<?php echo $row["category3"] ?></span>
    
                      <ul>
                        <li><?php echo $row["start_date"] ?> ~ <?php echo $row["end_date"] ?></li>
                        <li><?php echo $row["teacher"] ?></li>
                        <li>
                          <button type="submit">
                            <img src="./images/common/heart_w.png" alt="찜버튼" class="heart">
                          </button>
                        </li>
                      </ul>
                    </form>

                  </div>

                </li>

              </ul>
              <?php } ?>
            </div>
          </li>

          <li>
            <a href="#" title="일반" class="tab_mnu" >일반</a>
            <div class="con ">
              
            </div>
          </li>
          <li>
            <a href="#" title="창업" class="tab_mnu" >창업</a>
            <div class="con">
              
            </div>
          </li>
          <li>
            <a href="#" title="취미" class="tab_mnu" >취미</a>
            <div class="con ">
              
            </div>
          </li>
          <li>
            <a href="#" title="자격증" class="tab_mnu" >자격증</a>
            <div class="con ">
              
            </div>
          </li>

        </ul>

      </article>

    </section>
  </main>


  <!-- 공통바텀바삽입 -->
  <?php include('./php/include/bottom.php');?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=ff7262ce2f59072e4630050ca54a0a7c"></script>
  <script src="./script/kakaomap_api.js"></script>


  <script>  
    let tab_mnu = $('.tab_mnu')
    tab_mnu.click(function(){

    $('.con').hide(); //보이는컨텐츠 숨긴다
    $(this).next().show();

    //선택한 메뉴에 서식을 적용하기 그외 다른 a요소에 서식을 제거한다. 선생님 정답
    $(this).addClass('on').parent().siblings().find('a').removeClass('on')
    return false;
    })
  </script>

</body>
</html>