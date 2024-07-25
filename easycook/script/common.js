$(document).ready(function() {
  $('.cart').click(function() {
      var $this = $(this);
      var classNo = $this.data('no');
      var isInCart = $this.find('img').attr('src').includes('heart_r.png');

      $.ajax({
          url: './php/cart_toggle.php',
          method: 'POST',
          data: {
              class_no: classNo,
              action: isInCart ? 'remove' : 'add'
          },
          success: function(response) {
              if (response.includes('성공')) {
                var newSrc = isInCart ? './images/common/heart_w.png' : './images/common/heart_r.png';
                $('.cart[data-no="' + classNo + '"]').each(function() {
                  $(this).find('img').attr('src', newSrc);
                });
                //alert(response); //알림메세지
              } else if(response.includes('로그인')){
                alert('로그인이 필요한 서비스입니다.');
                window.location.href = './login.php';
              } else {
                alert(response);
              }
          },
          error: function() {
              alert('장바구니에 추가/삭제하는 중 오류가 발생했습니다.');
          }
      });
  });
});