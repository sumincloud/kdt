import React, { Component } from 'react';

class Football extends Component {
  
  shoot = () => { //화살표 함수 작성하기
    alert('슛~ 클릭이벤트 동작');
    //alert(this); //object object
  }
  // shoot1 = (txt) => {
  //   alert(txt);
  // }
  shoot2 = (txt, e) => {
    alert(e.type); //dblclick 문자가 나옴 = 이벤트 내용출력함
  }
  shoot3 = (txt, e) => {
    alert(e.type); //dblclick 문자가 나옴 = 이벤트 내용출력함
  }

  // 실습하기
  //1. 화살표 함수 문법으로
  print = () => { 
    
    //2. 텍스트 내용을 변수에 담는다
    let txt1 = document.getElementById('search_txt').value; 
    
    //3. 테스트 해본다.
    alert(txt1);

    //4. 원하는 태그요소에 내용을 출력한다.
    document.getElementById('result1').innerText=txt1;
  }

  render() {
    return (
      <>
        <h3>클래스형 콤포넌트에서 이벤트 사용하기</h3>
        <button onClick={this.shoot}>클릭하세요.</button>
        <p>React의 메서드의 경우 this키워드는 메서드를 소유한 구성 요소를 나타내야 합니다.</p>
        <p>그래서 화살표 함수를 쓰는 것이 좋습니다.</p>
        <p>여기서 this는 컴포넌트 오브젝트를 참고합니다.</p>

        <h4>함수를 호출시 매개변수 전달하기</h4>
        {/* <button onClick={this.shoot1('슛1~~')}>클릭하세요~</button> */}
        <p>처음 두번 출력하고 클릭시 동작이 안됨. 이럴 경우 익명의 화살표 함수를 사용해야 함.</p>
        <p>또는 이벤트 핸들러의 첫번째 매개변수를 this로 설정해야 함.</p>
        <p>위 this.shoot1함수는 자동으로 실행되며 아래의 shoot1함수는 사용자가 클릭이벤트를 했을 경우 실행이 된다.</p>

        <button onClick={()=>this.shoot1('슛2~~')}>클릭하세요~</button>

        <h4>이벤트 객체에 접근하는 방법</h4>
        <p>현재 클릭 이벤트를 사용하고 있으므로 클릭 이벤트에 접근한다.</p>
        <button onDoubleClick={(e) => this.shoot2('이벤트 객체 슛3~', e)}>더블클릭하세요!~ 이벤트 종류가 표시됩니다.</button>
        <p>화살표 함수를 사용하면 이벤트 객체 인수를 수동으로 보내야 한다.</p>
        <p>리엑트 이벤트종류 - onClick, onDoubleClick, onChange, onFocus, onMouseOver, onMouseLeave........</p>

        <h4>이벤트 핸들러의 첫번째 매개변수를 this로 설정</h4>
        <button onDoubleClick={this.shoot3.bind(this,'이벤트 객체 슛4~')}>더블클릭하세요!~ 이벤트 종류가 표시됩니다.</button>

        <p>이벤트 객체의 내용을 e or bind(this)를 사용할 것인지 선택하여 사용할 수 있음.</p>

        <p>실습문제. 검색폼을 작성하여 사용자가 입력한 내용을 '검색'버튼 클릭시 해당 문자열이 출력되도록 이벤트 작성하기(클래스형, 함수형)</p>

          <input type="search" id="search_txt" />
          <button onClick={this.print.bind(this)}>검색</button>
          <p id="result1"></p>
      </>
    );
  }
}

export default Football;