//-----------------메인배너 슬라이드----------------
var swiper1 = new Swiper(".mySwiper1", {
  spaceBetween: 0,
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    type: "fraction", // 페이지네이션을 번호로 표시
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var pauseBtn = document.querySelector("#sec01 .swiper-button-play-pause");

pauseBtn.addEventListener("click", function() {
  if (swiper1.autoplay.running) {
    swiper1.autoplay.stop();
    pauseBtn.classList.remove("bi-pause");
    pauseBtn.classList.add("bi-play-fill");
  } else {
    swiper1.autoplay.start();
    pauseBtn.textContent = "Pause";
    pauseBtn.classList.remove("bi-play-fill");
    pauseBtn.classList.add("bi-pause");
  }
});



//-------------실시간 인기수강 슬라이드---------------
var swiper2 = new Swiper(".mySwiper2", {
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
var swiper3 = new Swiper(".mySwiper3", {
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