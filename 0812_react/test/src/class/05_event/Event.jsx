import React from 'react';

function Event(props) {
  const onShoot1 = () => {
    alert('슛~ 클릭이벤트 동작');
  }
  const onShoot2 = (a) => {
    alert(a);
  }
  //1. 화살표 함수 작성하기
  const print = () => {

    //2. 검색어 변수선언
    let txt2 = document.getElementById('search_txt2').value;
    // alert('검색');

    //3. 테스트 해보기
    alert(txt2);
    
    //4. 선택한 요소에 변수값 출력하기
    document.getElementById('result2').innerText=txt2;
  }
  return (
    <>
      <h3>함수형 콤포넌트에서 이벤트 다루기</h3>
      매개변수 없음 : <button onClick={onShoot1}>클릭하세요.</button>
      <br />
      매개변수 있음 :  <button onClick={()=>onShoot2('매개변수가 있는 슛2!~~~')}>클릭하세요(매개변수)</button>

      <p>매개변수가 없으면 그냥 이름만 작성하면 되지만, 매개변수가 있으면 익명함수를 추가해야 합니다.</p>

      <p>실습문제. 검색폼을 작성하여 사용자가 입력한 내용을 '검색'버튼 클릭시 해당 문자열이 출력되도록 이벤트 작성하기(클래스형, 함수형)</p>

      <input type="search" id="search_txt2" />
      <button onClick={print}>검색</button>
      <p id="result2"></p>

    </>
  );
}

export default Event;