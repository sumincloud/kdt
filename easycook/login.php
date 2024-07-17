<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>로그인페이지</title>
  <!-- 공통 헤드정보 삽입 -->
  <?php include('./php/include/head.php'); ?>

  <style>
    /* 로그인페이지 서식 */
    section{
      max-width: 600px;
      margin: 0 auto;
      padding: 0 20px;
    }
    section > h2{
      text-align: center;
      font-size: var(--fs-large);
      font-weight: var(--fw-bold);
      padding: 50px 0 10px 0;
    }
    form label{
      font-size: var(--fs-medium);
      font-weight: 600;
    }
    input{
      height: 40px;
    }
    input::placeholder {
      font-size: var(--fs-small);
      font-weight: var(--fs-light);;
    }

    #easy_login{
      margin-bottom: 100px;
    }

  </style>
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/include/header_sub.php');?>

  <main>
    <section>
      <h2>로그인</h2>
      <div class="login_form">
        <form action="./login_check.php" id="loginForm" name="loginForm" method="post" class="needs-validation" novalidate>
          <div class="mt-4 mb-2">
            <label for="id" class="form-label">아이디</label>
            <input type="text" class="form-control" name="id" id="id" placeholder="아이디를 입력해주세요" required>
            <div class="invalid-feedback">
              아이디를 입력해주세요.
            </div>
            <input type="checkbox" id="id_save" name="id_save" class="form-check-input mt-2">
            <label for="id_save" class="form-check-label mt-2" style="font-size: var(--fs-small); font-weight: var(--fw-light);">아이디 저장</label>
          </div>
          <div class="mt-4 mb-2">
            <label for="password" class="form-label">비밀번호</label>
            <div style="position: relative;">
              <input type="password" class="form-control" name="password" id="password" placeholder="비밀번호를 입력해 주세요" required>
              <div class="invalid-feedback">
                비밀번호를 입력해주세요.
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="container text-center mt-4 mb-4">
        <div class="row" style="text-wrap: nowrap; font-size:var(--fs-small);">
          <div class="col border-end"><a href="#" class="link-secondary">아이디 찾기</a></div>
          <div class="col border-end"><a href="#" class="link-secondary">비밀번호 찾기</a></div>
          <div class="col"><a href="./register.php" class="link-secondary">회원가입</a></div>
        </div>
      </div>

      <div class="mb-5 btn-box-l">
        <button id="login" class="btn-l" type="submit">로그인</button>
      </div>


      <div class="fs-6 mb-3">
        <div class="text-center text-secondary mb-2">간편로그인</div>
      </div>
      <div class="container text-center fs-5" id="easy_login">
        <div class="row">
          <div class="col">
            <a href="javascript:void(0);" class="link-secondary" onclick="kakaoLogin()">
              <img src="../images/login_kakao.png" alt="카카오톡 로그인">
            </a>
          </div>
          <div class="col">
            <a href="#" class="link-secondary">
              <img src="../images/login_naver.png" alt="네이버 로그인">
            </a>
          </div>
          <div class="col">
            <a href="#" class="link-secondary">
              <img src="../images/icon_goggle.png" alt="구글 로그인">
            </a>
          </div>
      </div>


    </section>


  </main>





  <!-- 카카오 로그인 -->
  <script src="https://developers.kakao.com/sdk/js/kakao.js"></script>
  <script>
    Kakao.init('eae1a42f5aae28538a34a719867bc196');
    // sdk초기화여부판단 
    console.log(Kakao.isInitialized());
    //카카오로그인 
    function kakaoLogin() {
      //Kakao.Auth.authorize()
      Kakao.Auth.login({
        success: function (response) {
          Kakao.API.request({ 
          url: '/v2/user/me', success: function (response) {
              console.log(response)
              }, fail: function (error) { 
              console.log(error)
              }, 
            })
            }, fail: function (error) { 
            console.log(error) 
          }, 
        }) 
      } 
    //카카오로그아웃 
    function kakaoLogout() {
    if (Kakao.Auth.getAccessToken()) { 
      Kakao.API.request({
      url: '/v1/user/unlink',
    })
    .then(function(response) {
      console.log(response);
    })
    .catch(function(error) {
      console.log(error);
    });
    // Kakao.API.request({ 
    // url: '/v1/user/unlink', success: function (response) { 
    // console.log(response) 
    // }, fail: function (error) { 
    //   console.log(error) }, 
    //});
      Kakao.Auth.setAccessToken(undefined) 
    }}
  </script>


</body>
</html>