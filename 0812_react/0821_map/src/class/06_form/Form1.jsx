import React, { Component } from 'react';

class Form1 extends Component {
  
  state = { //state선언
    name:'' //변수값을 지정 초기화
  }

  nameChange = (e) =>{
    this.setState({
      name:e.target.value //사용자가 입력하는 값을 name값으로 저장
    });
  }

  render() {
    return (
      <>
        <h4>1. 기본 입력폼 만들기</h4>
        <form>
          <p>이름을 작성하세요. - {this.state.name}</p>
          <input type='text' name="name" onChange={this.nameChange} />

          {/* <p>주소를 작성하세요. - {this.state.address}</p>
          <input type='text' name="address" onChange={this.nameChange} /> */}
        </form>

        <ul>
          <li>input 태그의 값이 변경되면 'onChange'이벤트를 사용하여 h4에 텍스트값이 변경되는 내용 작성하기</li>
          <li>html 폼태그는 일반적으로 DOM에 의해 처리</li>
          <li>REACT 폼태그는 일반적으로 컴포넌트에 의해 처리</li>
          <li>컴포넌트가 데이터를 처리하면 모든 데이터가 state에 저장됨.</li>
        </ul>
      </>
    );
  }
}

export default Form1;