import React, { Component } from 'react';

class Form5 extends Component {
  
  state = {
    name:"", //문자데이터일 경우 '' 공백기호
    age:null //숫자데이터일 경우 null값 = 값없음
  }

  //전송버튼 클릭시 실행되는 화살표함수
  dataSubmit = (e) =>{
    e.preventDefault(); //새로고침 페이지 X, 상단으로 이동하는걸 막기
    let age = this.state.age;
    if(!Number(age)){ //나이가 숫자가 아니라면 경고창 띄우기
      alert('나이는 숫자로 입력해야 합니다.');
    }
  }

  //출력되는 화살표 함수
  nameChange = (e) =>{
    let n = e.target.name; //이름
    let v = e.target.value; //값
    this.setState({
      [n]:v
    });
  }

  render() {
    return (
      <>
        <h4>데이터 전송시 유효성 검사하기</h4>
        <p>이름, 나이 입력시 이름은 문자, 나이는 숫자로 입력해야 하되 나이가 숫자데이터가 아니면 오류메세지나 나올 수 있도록 해야함.</p>
        <p>if문을 사용하여  state값중 나이가 숫자가 아니면 alert메서드로 경고창을 띄움</p>
        <p>나이는 숫자데이터이기 때문에 Number형으로 변환해야 함.</p>

        <form onSubmit={this.dataSubmit}>
          <p>
            <strong>이름 : {this.state.name}</strong>
            <strong>나이 : {this.state.age}</strong>
          </p>

          <p>이름을 입력하세요. : 
            <input type="text" name="name" onChange={this.nameChange} />
          </p>
          <p>나이를 입력하세요. : 
            <input type="text" name="age" onChange={this.nameChange} />
          </p>
          <p><button type="submit">전송하기</button></p>
        </form>
      </>
    );
  }
}

export default Form5;