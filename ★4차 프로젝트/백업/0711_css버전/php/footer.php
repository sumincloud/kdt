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



  /* 하단 로고랑 sns */
  .logo-box{
    justify-content: space-between;
    margin-top: 1.5rem;
  }
  .footer-logo {
    width: 150px;
    height: 50px;
  }
  .social-icons{
    width: 220px;
    height: 50px;
    font-size: var(--fs-xlarge);
    text-align: left;
    margin-top: 20px;
  }
  .social-icons a {
    color: rgba(255,255,255,0.6);
    margin: 0 5px;
  }

  @media (max-width: 768px) {
  .logo-box{
    display: flex;
    margin-top: 0;
  }
  .social-icons{
    text-align: right;
    margin-top: 0;
  }
}

</style>




<!-- 푸터영역 -->
<footer class="pad">
  <div class="container">
    <div class="row">
      <div class="col-12 link mt-4">
        <a href="#" title="회사소개">회사소개</a>
        <a href="#" title="회원약관">회원약관</a>
        <a href="#" title="개인정보처리방침">개인정보처리방침</a>
        <a href="#" title="수강료 안내">수강료 안내</a>
      </div>
      <div class="col-12 col-md-6 mt-4 mb-4" style="line-height: 160%;">
        <p>Company.Easy Cook(이지쿡)</p>
        <p>Address. 0000 0000 00-0 0층</p>
        Owner. 000
        <p>Business License. 2024 0000 0000 0000000<br>
        Personal Information Manager. 000<br>
        Email.00000@0000.000<br>
        Phone Number. 000-0000-0000</p>
        <p>Copyright ⓒ Easy Cook, All Rights Reserved.</p>
      </div>
      <div class="col-12 col-md-6 logo-box">
        <img src="https://dummyimage.com/300x200" alt="하단로고" class="footer-logo col-6 col-md-6">
        <div class="social-icons mb-4 col-6  col-md-6">
          <a href="#"><i class="bi bi-chat-dots"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
          <a href="#"><i class="bi bi-youtube"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
