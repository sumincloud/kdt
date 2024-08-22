import React, { Component } from 'react';

class Form3 extends Component {
  state = { //state선언
    name:'' //변수값을 지정 초기화
  }

  //전송하기 버튼 클릭시 호출되는 화살표 함수
  dataSubmit=(e)=>{ //이벤트 객체 e를 활용하여
    e.preventDefault(); //새로고침, 페이지 상단으로 못올라가게 함.
    //alert('입력하신 이름은 : ' + this.state.name + '입니다.');
    document.getElementById('result').innerHTML='입력하신 이름은 : <strong>' + this.state.name + '</strong>입니다.';
  }

  nameChange = (e) => {
    this.setState({
      name:e.target.value //사용자가 입력하는 값을 name값으로 저장
    });
  }
  
  render() {
    return (
      <form onSubmit={this.dataSubmit}>
        <h4>3. onSubmit으로 입력한 내용 전송하기</h4>
        <p>사용자가 입력한 이름은 <strong>{this.state.name}</strong>입니다.</p>
        <p id="result"></p>

        <input type='text' name="name" onChange={this.nameChange} />
        <button type='submit'>전송하기</button>
      </form>
    );
  }
}

export default Form3;