import React, { Component } from 'react';

class Counter extends Component {
  // 초기값;
  state={ n:0 }
  //1씩 증가함수
  onPlus = () => {
    this.setState({
      n : this.state.n+1 //속성:값
    });
  }
  //1씩 감소함수
  onMinus = () => {
    if(this.state.n==0){
      this.setState({
        n:0
      });
    }else{
      this.setState({
        n:this.state.n-1 //속성:값
      });
    }
  }

  render() {    
    return (
      <>
      <h2>state</h2> 
        <dl>
        <dt>state의 정의</dt>
        <dd>부모가 내려주는 값이 아닌, 컴포넌트 자신이 어떤 값을 관리하고 싶을 때 사용</dd>
        <dd>클래스형 컴포넌트는 바로 state를 사용가능</dd>
        <dd>함수형 컴포넌트는 useState()라는 함수를 통해 사용</dd>
        <dd>리액트는 제이쿼리와 달리 DOM을 직접 가져와서 조작하는 것이 아니기 때문에, 유동적으로 변하는 값은 모두 state로 관리해 준다고 생각하시면 됩니다.</dd>
      </dl>

      <h3>실습예제 - +, -버튼을 클릭하면 숫자증가, 숫자감소하는 state값 작성하기</h3>
      <div>{this.state.n}</div>
      <input type="button" value="+" onClick={this.onPlus}></input>
      <input type="button" value="-" onClick={this.onMinus}></input>

      <p>- 자신 컴포넌트에서 유동적으로 변할 값은 state로 선언합니다.</p>
      <p>- setState()함수는 state의 값을 변경할 때 주는 함수입니다.</p>
      <p>- JSX에서 이벤트를 사용할때도 카멜표기법으로 작성합니다. </p>
      </>
    );
  }
}

export default Counter;