<?php
  include('../db/dbconn.php');
?>
<style>
	/* 상단 헤더 */
  
	header{
    position: fixed;
		width: 100%; height: 70px;
		background: #fff;
		border-bottom: 1px solid #eee;
		top:0;
		z-index: 100;
	}
	header > div{
    position: absolute;
		width: 100%; height: 40px;
		display: flex;
		align-items: center;
		justify-content: space-between;
		top: 50%;
		transform: translateY(-50%);
	}
  /* 1400px 이상일때 헤더크기 */
  @media (min-width: 1400px) {
    header > div{
      width: 1400px;
      left:50%;
      transform: translate(-50%, -50%);
    }
  }


  header > div h1{
    width: 100px; height: 100%;
  }
  header > div h1 img{
    width: 100%; height: 100%;
    object-fit:cover;
  }
	header > div ul{
		display:flex;
		justify-content:center;
	}
  header > div ul li{
    width: 40px;
    text-align: center;
    cursor: pointer;
  }
  header > div ul li a{
    display: block;
  }
	header > div ul li i{
    line-height: 40px;
    font-size: 30px;
	}
  header > div ul .bi-bell::before{
    transform: scale(0.8);
  }


	/* 사이드바 메뉴 */
	.side{
		width:400px; height: 100vh;
		position: absolute;
		z-index: 100;
		right:-100%;
		transition: 0.5s;
    background: pink;
	}
  .side.open{
    right:0;
  }
  .side img{
    height: 60px;
  }
	#toggle_close{
		position: absolute;
		top:20px; right: 20px;
		cursor: pointer;
	}
	.side .depth1 {
		margin-bottom:50px;
	}
	.side .depth1 > a{
		font-weight:500;
		font-size:25px;
	}
	.side .depth1 .depth2{
		margin-top: 30px;
	}
	.side .depth1 .depth2 li{
		margin-top: 20px;
	}
	.side .depth1 .depth2 a {
		padding:6px 0;
		font-size:18px;
	}
	.side .depth1 .depth2 a:active {
		color:#cf1317;
	}
	.side .depth1 .depth2 a:hover {
		color:#cf1317;
	}

  /* 모바일 버전일때 */
  @media (max-width: 767px) {
		.side {
			width: 70%;
		}
	}


</style>
<header>
  <div class="pad">
    <h1>
      <a href="#" title="메인페이지로 이동">
        <img src="https://dummyimage.com/300x200" alt="로고">
      </a>
    </h1>
    <ul>
      <li>
        <a href="#" title="알림">
          <i class="bi bi-bell"></i>
        </a>
      </li>
      <li id="list">
        <a href="#" title="메뉴">
          <i class="bi bi-list"></i>
        </a>
      </li>
    </ul>
  </div>

  <!-- 사이드바 -->
  <nav class="side p-4">
    <div class="clearfix">
      <div>
        <a href="#" title="로고">
          <img src="https://dummyimage.com/300x200" alt="로고">
        </a>
        <div id="toggle_close">
          <i class="bi bi-x-lg fs-4"></i>
        </div>
        <dl class="mt-3">
          <dd>
            <?php
              if (isset($_SESSION['userid'])) {
                echo "<a href='./php/logout.php' title='로그아웃' style='margin-right:10px'>로그아웃</a>";
                echo "<a href='#' title='마이페이지'>마이페이지</a>";
              }else{
                echo "<a href='./login.php' title='로그인' style='margin-right:10px'>로그인</a>";
                echo "<a href='./join.php' title='회원가입'>회원가입</a>";
              }
              ?>
          </dd>
          <?php
            if (isset($_SESSION['userid'])) {
              echo "<dd class='mt-3'>" . 
              $_SESSION['username'].'('. $_SESSION['userid'].')'
              ."</dd>";
            }?>
        </dl>
      </div>
      <!-- 카테고리 목록 -->
      <ul class="mt-5">
        <li class="depth1">
          <a href="#" title="depth1">depth1</a>
          <div class="depth2">
            <ul>
              <!-- 카테고리 페이지로 이동 -->
              <li><a href="./cate.php?cate=cate01" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate02" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate03" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate04" title="depth2">depth2</a></li>
            </ul>
          </div>
        </li>
        <li class="depth1">
          <a href="#" title="depth1">depth1</a>
          <div class="depth2">
            <ul>
              <!-- 카테고리 페이지로 이동 -->
              <li><a href="./cate.php?cate=cate01" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate02" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate03" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate04" title="depth2">depth2</a></li>
            </ul>
          </div>
        </li>
        <li class="depth1">
          <a href="#" title="depth1">depth1</a>
          <div class="depth2">
            <ul>
              <!-- 카테고리 페이지로 이동 -->
              <li><a href="./cate.php?cate=cate01" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate02" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate03" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate04" title="depth2">depth2</a></li>
            </ul>
          </div>
        </li>
        <li class="depth1">
          <a href="#" title="depth1">depth1</a>
          <div class="depth2">
            <ul>
              <!-- 카테고리 페이지로 이동 -->
              <li><a href="./cate.php?cate=cate01" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate02" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate03" title="depth2">depth2</a></li>
              <li><a href="./cate.php?cate=cate04" title="depth2">depth2</a></li>
            </ul>
          </div>
        </li>

      </div>
    </div>
  </nav>
</header>




<script>
  $(document).ready(function(){
    //사이드바 열고 닫기
    $('#list').click(function(){
      $('.side').addClass('open');
    })
    $('#toggle_close').click(function(){
      $('.side').removeClass('open');
    })




  })
</script>
