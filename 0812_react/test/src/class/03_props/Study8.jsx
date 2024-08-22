import React, { Component } from 'react';
import Child from './Child';

class Study8 extends Component {
  render() {
    return (
      <>
        <h3>props(속성)</h3>
        <p>props - properties(속성)의 줄임말.</p>
        <p>부모콤포넌트가 자식콤포넌트에게 전달해주는 값. 이것을 통해서 같은 콤포넌트여도 결과를 다르게 볼 수 있습니다.</p>
        <p>리엑트에서 props는 값을 읽기 위해서만 사용을 하고, 값을 변경하려면 오류가 발생된다.</p>
        <p>작성방법- 자손콤포넌트명 속성명='속성값'</p>
        <p>자손콤포넌트에서 부모로부터 전달받은 props를 작성하고자 할때는 this.props.속성명 or props.속성명 으로 작성한다.</p>

        <p>props의 기본값 설정 : defaultProps</p>
        <p>자손콤포넌트에서 값을 받기 위해 this.props.속성명을 사용했지만 부모콤포넌트로 부터 값을 전달받지 않은 경우는 기본값을 지정할 수 있다. 개발자가 작성안한 경우 또는 나중에 값을 대입하려는 경우에 해당한다.</p>

        <Child name="김철수" age="30" hobby="등산" />
        <Child name="홍길동" age="24" hobby="영화감상" />
        <Child />

      </>
    );
  }
}

export default Study8;