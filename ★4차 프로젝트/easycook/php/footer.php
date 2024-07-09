<?php
  include('../db/dbconn.php');
?>
<style>
  /* 푸터서식 */
  footer{
    background: var(--s-color-darkbrown);
    color: rgba(255,255,255,0.6);
    font-size: var(--fs-small);
    font-weight: var(--fw-thin);
  }
  footer .link{
    display: flex;
    justify-content: space-around;
  }
  footer .link a{
    color: var(--s-color-white);
    font-weight: var(--fw-light);
    text-align: center;
  }



  .footer-logo {
    width: 150px;
    height: 50px;
    margin-bottom: 10px;
  }
  .social-icons {
    font-size: 24px;
    margin-top: 10px;
  }
  .social-icons a {
    color: rgba(255,255,255,0.6);
    margin: 0 10px;
  }

</style>






<!-- 푸터영역 -->
<footer class="pad">
  <div class="container">
    <div class="row">
      <div class="col-12 link">
        <a href="#" title="회사소개">회사소개</a>
        <a href="#" title="회원약관">회원약관</a>
        <a href="#" title="개인정보처리방침">개인정보처리방침</a>
        <a href="#" title="수강료 안내">수강료 안내</a>
      </div>
      <div class="col-12 col-md-6">
        <p>Company.Easy Cook(이지쿡)</p>
        <p>Address. 0000 0000 00-0 0층</p>
        Owner. 000
        <p>Business License. 2024 0000 0000 0000000<br>
        Personal Information Manager. 000<br>
        Email.00000@0000.000<br>
        Phone Number. 000-0000-0000</p>
      </div>
    </div>
    <p>Copyright ⓒ Easy Cook, All Rights Reserved.</p>
    <div class="social-icons">
      <a href="#"><i class="bi bi-chat-dots"></i></a>
      <a href="#"><i class="bi bi-twitter"></i></a>
      <a href="#"><i class="bi bi-youtube"></i></a>
      <a href="#"><i class="bi bi-facebook"></i></a>
    </div>
    <img src="https://dummyimage.com/300x200" alt="하단로고" class="footer-logo">
  </div>
</footer>
