import React, { Component } from 'react';
import Football from './Football';
import Event from './Event';

class Study10 extends Component {
  render() {
    return (
      <>
        <h3>1. 이벤트(event)의 정의</h3>
        <p>이벤트란? 사용자가 웹브라우저에서 DOM요소들과 상호작용하는 것입니다.</p>
        <p>리액트는 HTML과 동일한 이벤트를 갖습니다.</p>
        <p>이벤트는 DOM요소에만 줄 수 있고, 우리가 생성한 컴포넌트에는 줄 수 없습니다.</p>

        <h3>html에서 이벤트 사용방법</h3>
        <p>태그요소명 onclick="함수명();" - 소문자로 작성</p>
        
        <h3>jsx문법에서 이벤트 사용방법</h3>
        <p>태그요소명 onClick="함수명()" or onClick="this.함수명" </p>
        <p>클래스 콤포넌트에서는 함수가 메서드화 처리되는 것이므로 this키워드를 반드시 사용한다.</p>

        <hr />
        {/* 1. 클래스 컴포넌트로 이벤트 사용하기 */}
        <Football />

        <hr />
        {/* 2. 함수형 콤포넌트로 이벤트 사용하기 */}
        <Event />
      </>
    );
  }
}

export default Study10;