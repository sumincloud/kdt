// script.js

$(document).ready(function(){

  // 메뉴를 클릭시 함수내용을 실행
  $('nav a').click(function(e){

    //새로고침 안되게 하는 방법
    e.preventDefault();
    //return false;
    //

    let url = this.href; //속성값 변수에 담기
    console.log(url); // 값출력하기

    $('nav a.current').removeClass('current'); //메뉴서식제거
    $(this).addClass('current'); //해당메뉴에  서식적용

    $('#container').remove(); //컨테이너 박스 삭제
    
    //#content영역에 해당 주소를 불러와서 삽입하여 화면에 출력한다. 2가지 방법
    // $('#content').load(`${url} #container`).hide().fadeIn('slow');
    $('#content').load(url + ' #container').hide().fadeIn('slow');

  });

});