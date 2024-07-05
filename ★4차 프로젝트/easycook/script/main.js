//-----------메인배너 슬라이드---------


//-------------실시간 인기수강 슬라이드---------------
var swiper = new Swiper(".mySwiper2", {
  //0 ~ 375일때 (작은 모바일일때 설정)
  slidesPerView: 1.5,
  spaceBetween: 30,
  touchRatio: 1,
  simulateTouch: true,
  breakpoints : { //반응형 설정
    376 : { //376~767일때 (큰 모바일일때 설정)
      slidesPerView : 1.5,
      spaceBetween: 12,
    },
    768 : { //768~1023일때 (태블릿일때 설정)
      slidesPerView : 3.2,
      spaceBetween: 12,
    },
    1024 : {  //1024 이상 일때 (pc일때 설정)
      slidesPerView : 4.2,
      spaceBetween: 50,
    }
  },
});


//-------------실시간 인기수강 슬라이드---------------
var swiper = new Swiper(".mySwiper3", {
  //0 ~ 375일때 (작은 모바일일때 설정)
  slidesPerView: 1.5,
  spaceBetween: 30,
  touchRatio: 1,
  simulateTouch: true,
  breakpoints : { //반응형 설정
    376 : { //376~767일때 (큰 모바일일때 설정)
      slidesPerView : 2.2,
      spaceBetween: 12,
    },
    768 : { //768~1023일때 (태블릿일때 설정)
      slidesPerView : 3.2,
      spaceBetween: 12,
    },
    1024 : {  //1024 이상 일때 (pc일때 설정)
      slidesPerView : 4.2,
      spaceBetween: 50,
    }
  },
});