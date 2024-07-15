<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이지쿡 회원가입</title>
  <!-- 공통 헤드정보 삽입 -->
  <?php include('./php/include/head.php'); ?>
  <style>
    section{
      max-width: 600px;
      margin: 0 auto;
      padding: 0 20px;
    }
    section h2{
      text-align: center;
      font-size: var(--fs-large);
      font-weight: var(--fw-bold);
      padding: 50px 0 10px 0;
    }
    form label{
      font-size: var(--fs-medium);
      font-weight: var(--fw-bold);
    }

  </style>
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/include/header_sub.php');?>

  <main>
    <section>
      <h2>회원가입</h2>
      <form id="teacher_check_form" action="./php/register_teacher_check.php" method="post">
        <!-- 프로필 사진 -->
        <div class="mt-4 mb-2">
          <label for="profile" class="form-label">프로필 사진</label>
          <input type="file" class="form-control" id="profile" name="profile">
        </div>
        <!-- 이름 -->
        <div class="mt-4 mb-2">
          <label for="name" class="form-label">이름<span style="color:var(--red);">*</span></label>
          <input type="text" class="form-control" id="name" name="name" required>
          <div class="invalid-feedback">
            이름을 입력해주세요.
          </div>
        </div>
        <!-- 아이디 -->
        <div class="mt-4 mb-2">
          <label for="id" class="form-label">아이디<span style="color:var(--red);">*</span></label>
          <input type="text" class="form-control" id="id" name="id" required>
          <div class="invalid-feedback">
            영문자와 숫자를 조합하여 4~20자로 작성해주세요.
          </div>
        </div>
        <!-- 패스워드 -->
        <div class="mt-4 mb-2">
          <label for="password" class="form-label">패스워드<span style="color:var(--red);">*</span></label>
          <small class="d-block text-secondary mb-2" style="font-size: 14px;">8자 이상 20자 이내의 영문,숫자,특수문자(!@#$%&amp;)사용</small>
          <input type="password" class="form-control" id="password" name="password" required>
          <div class="invalid-feedback">
            영문자, 숫자, 특수문자를 조합하여 8~20자로 작성해주세요.
          </div>
        </div>
        <!-- 패스워드 확인 -->
        <div class="mt-4 mb-2">
          <label for="password2" class="form-label">패스워드 확인<span style="color:var(--red);">*</span></label>
          <input type="password" class="form-control" id="password2" name="password2" required>
          <div class="valid-feedback">
            비밀번호가 일치합니다.
          </div>
          <div class="invalid-feedback">
            패스워드가 일치하지 않습니다.
          </div>
        </div>
        <!-- 전화번호 -->
        <div class="mt-4 mb-2">
          <label for="tel" class="form-label">전화번호<span style="color:var(--red);">*</span></label>
          <input type="text" class="form-control" id="tel" name="tel" required>
          <div class="invalid-feedback">
            전화번호를 올바르게 입력해주세요.
          </div>
        </div>
        <!-- 이메일 -->
        <div class="mt-4 mb-2">
          <label for="email" class="form-label">이메일 (선택입력)</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>






        <!-- 버튼 형식 -->
        <div class="btn-box-l" style="margin-top: 50px;">
          <button type="submit" class="btn-l">가입완료</button>
          <button type="button" class="btn-l" onclick="#">가입취소</button>
        </div>


        
      </form>



    </section>
    



  </main>
  <script>

  </script>

</body>
</html>