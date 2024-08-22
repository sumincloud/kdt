import React, { Component } from 'react';

class Form2 extends Component {
  
  state = { //state선언
    name:'' //변수값을 지정 초기화
  }

  nameChange = (e) =>{
    this.setState({
      name:e.target.value //사용자가 입력하는 값을 name값으로 저장
    });
  }
  
  render() {
    let header ="";
    if(this.state.name){ //입력한 이름의 상태값이 존재하는지 여부
      header = <p>사용자가 입력한 이름 : {this.state.name}</p>;
    }else{ //입력하지 않았다면
      header=""; //공백으로 표시
    }
    return (
      <>
        <h4>2. if문으로 조건식 작성하기</h4>
        {/* 출력되는 영역 header */}
        {header}
        <form>
          <input type='text' name="name" onChange={this.nameChange} />
        </form>
      </>
    );
  }
}

export default Form2;