import React, { Component } from 'react';
import Grand from './Grand';

class App extends Component {
  render() {
    return (
      <>
        <h2>props</h2>
        <p>props : properties의 줄임말</p>
        <p>부모 컴포넌트가 자식콤포넌트에게 전달해주는 값.</p>
        <p>리액트에서 props를 값을 읽기 위해서만 사용, 값을 변경하려하면 오류가 발생</p>
        <p>자식요소에 전달할 값이 없는경우 기본값이 출력되도록 설정할 수 있다. defaultProps= 속성:값</p>
        <p>비구조화 할당방식으로 속성정의 : render()함수 바로아래 const name, age, hobby = this.props;로 선언하여 적용하기</p>
        <p>함수형 콤포넌트로 전환하여 내용 출력하기 - 속성을 매개변수로 처리한다.</p>
        <p>화살표 함수를 사용해도 가능 const 변수명  </p>
        <hr />
        {/* <Parent1 /> */}
        <Grand />
      </>
    );
  }
}

export default App;