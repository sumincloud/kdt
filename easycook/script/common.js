// $(document).ready(function(){
//   $('.cart').click(function(){
//     var classNo = $(this).data('no'); // 클래스no번호
//     var $this = $(this);
//     $.ajax({
//       url: './php/cart_input.php', // 데이터베이스에 추가하는 PHP 파일
//       method: 'POST',
//       data: {
//         class_no: classNo,
//       },
//       success: function(response) {
//         $this.find('img').attr('src', './images/common/heart_r.png'); // 이미지 변경
//         $('body').append(response); // 서버 응답을 페이지에 추가하여 스크립트 실행
        
//       },
//       error: function(error) {
//         alert('장바구니에 추가하는 중 오류가 발생했습니다.');
//       }
//     });
//   });
// });


$(document).ready(function(){
  $('.cart').click(function(){
    var $this = $(this);
    var classNo = $this.data('no'); // 클래스no번호
    var isInCart = $this.find('img').attr('src').includes('heart_r.png'); // 현재 상태 확인

    $.ajax({
      url: './php/cart_toggle.php', // 데이터베이스에 추가 또는 삭제하는 PHP 파일
      method: 'POST',
      data: {
        class_no: classNo,
        action: isInCart ? 'remove' : 'add' // 현재 상태에 따라 추가 또는 삭제 요청
      },
      dataType: 'json',
      success: function(response) {
        if (response.status === 'success') {
          if (isInCart) {
            $this.find('img').attr('src', './images/common/heart_w.png'); // 이미지 변경
          } else {
            $this.find('img').attr('src', './images/common/heart_r.png'); // 이미지 변경
          }
          alert(response.message); // 성공 메시지 표시
        } else {
          alert(response.message); // 오류 메시지 표시
        }
      },
      error: function(error) {
        alert('장바구니에 추가/삭제하는 중 오류가 발생했습니다.');
      }
    });
  });
});
