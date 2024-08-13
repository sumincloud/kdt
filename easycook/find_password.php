<?php
  session_start(); // 세션 시작
?>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>이지쿡 | 비밀번호 찾기</title>
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
      padding: 100px 0 50px 0;
    }
    form label{
      font-size: var(--fs-medium);
      font-weight: var(--fw-bold);
    }

    .result{
      margin-top: 30px;
      font-weight: 600;
      text-align: center;
    }

  </style>
</head>
<body>
  <!-- 공통헤더삽입 -->
  <?php include('./php/include/header_sub.php');?>

  <main>
    <section>
      <h2>비밀번호 찾기</h2>
      <form id="pw_find_form" action="./php/find_password_check.php" method="post">
        <div class="mb-3">
          <label for="id" class="form-label">아이디</label>
          <input type="text" class="form-control" id="id" name="id" placeholder="아이디를 입력해주세요." required>
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">이름</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="이름을 입력해주세요." required>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">전화번호</label>
          <input type="tel" class="form-control" id="phone" name="phone" placeholder="전화번호를 입력해주세요." required>
        </div>

        <div class="btn-box-l">
          <button type="submit" class="btn-l">비밀번호 찾기</button>
        </div>
      </form>

    </section>
    



  </main>
  <script>
    $(document).ready(function() {
        $('#pw_find_form').submit(function(event) {
        event.preventDefault(); // 기본 제출 동작을 막음

        // 폼 데이터 직렬화
        let formData = $(this).serialize();

        // 서버로 데이터 전송
        $.post('./php/find_password_check.php', formData, function(response) {
          if (response.status === 'success') {
            // 성공 시 비밀번호 변경 페이지로 이동
            window.location.href = './find_password_edit.php?id=' + encodeURIComponent(response.id);
          } else {
            // 에러 시 알림창으로 메시지 표시
            alert(response.message);
          }
        }, 'json')
        .fail(function() {
          // 실패 시 에러 처리
          alert('서버 요청 실패. 나중에 다시 시도해 주세요.');
        });
      });
    });
  </script>

</body>
</html>