import React, { Component } from 'react';
import Counter1 from './Counter1';
import Counter2 from './Counter2';

class Study9 extends Component {
  render() {
    return (
      <>
        <h3>상태값을 관리하기 위한 state</h3>
        <ul>
          <li>부모가 내려주는 값이 아닌, 콤포넌트 자신이 어떤 값을 관리하고 싶을 때 사용</li>
          <li>클래스형 콤포넌트를 바로 state 사용가능</li>
          <li>함수형 콤포넌트는 useState()라는 함수를 통해 사용할 수 있음.</li>
          <li>리액트는 제이쿼리와 다르게 DOM을 직접 가져와서 조작하는 것이 아니고, 유동적으로 변하는 값을 모두 state로 관리해줌.</li>
        </ul>

        <p>1. 자신 컴포넌트에서 유동적으로 변할 값은 state로 선언합니다.</p>
        <p>2. setState()함수는 state값을 변경해주는 함수</p>
        <p>3. jsx문법에서는 반드시 대,소문자 확인할 것</p>

        <dl>
          <dt>React Hooks소개</dt>
          <dd>Hooks는 리액트 버전 16.9부터 추가되었습니다.</dd>
          <dd>Hooks가 나온 것은 함수 컴포넌트가 리액트의 몇 가지 기능에 접근할 수 없었던 것을 접근하게 해주기 위해서입니다.</dd>
          <dd>Hooks를 사용하는 이유는 state 및 라이프사이클에 함수 컴포넌트가 접근할 수 있게 합니다.</dd>
          <dd>Hooks는 React의 함수 컴포넌트 내에서만 호출할 수 있습니다.</dd>
          <dd>Hooks는 컴포넌트의 최상위 수준에서만 호출할 수 있습니다.</dd>
          <dd>Hooks는 조건부일 수 없습니다.</dd>
        </dl>



        <h4>클래스형 콤포넌트로 카운터 만들기</h4>
        <Counter1 />

        <h4>함수형 콤포넌트로 카운터 만들기</h4>
        <Counter2 />

      </>
    );
  }
}

export default Study9;