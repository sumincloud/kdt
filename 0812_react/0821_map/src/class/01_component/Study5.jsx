import React from 'react';

function Study5(props) {

  return (
    <>
      <h3>01_리액트의 JSX문법</h3>
      <p>JSX : JavaScript + XML의 약자</p>
      <p>리액트에서 UI를 표현할 때 쓰는 문법</p>
      <p>자바스크립트의 확장문법, XML과 매우 비슷함.</p>
      <p>JSX를 반드시 사용해야 하는 것은 아니지만, JSX를 사용하면 React애플리케이션을 더 쉽게 작성이 가능하다.</p>
      <p>- 브라우저에서 실행되기 전에 바벨(BABEL)을 사용하여 일반 자바스크립트 형태의 코드로 변환된다.(컴파일)</p>
      <p>COMPILE이란? = 영어문장 = 한글로 번역함</p>

      <h3>1. JSX의 장점</h3>
      <p>html코드 작성 문법과 비슷하기 때문에 쉽고 사용자에게 익숙하다.</p>
      <p>콤포넌트들도 html태그를 작성하듯이 그냥 작성하여 활용도가 높다.</p>

      <h3>2. JSX작성시 주의할점(문법)</h3>
      <ul>
        <li>꼭 태그는 최상위 태그(div, <></>, fragment)로 감싸줘야 합니다.</li>
        <li>닫는 태그는 반드시 작성해야 한다. br / 처럼 태그는 무조건 닫혀 있어야 하며, 종료태그가 없는 태그는 끝에 /를 넣어준다.</li>
        <li>JSX의 표현식 { } : 콤포넌트 UI를 구현하는것 이외에도 여러가지 기능을 합니다. 그 중 하나가 자바스크립트 값을 처리하는 것입니다. {}내부에는 변수값, 속성값 또는 기타 유효한 JAVASCRIPT표현식을 작성 할 수 있습니다.</li>
        <li>JSX {} 안의 주석은 /* */ 만 사용가능</li>
        <li>조건부 렌더링 - 삼항조건연산자 문법 = (조건식)?(참일때 표현식):(거짓일 경우 표현식)</li>
        <li>JSX 스타일링 5가지 방법 - 리엑트에서 css서식을 적용하는 방법에는 5가지가 있다.
					<ol>
						<li>inline스타일</li>
						<li>변수값 활용</li>
						<li>외부스타일을 작성하고 import로 연결</li>
						<li>className="클래스명" 식으로 작성함.</li>
						<li>css모듈방식</li>
					</ol>
        </li>
        <li>부모와 자손콤포넌트(class, 함수형)</li>
      </ul>
      <p>리액트에서는 파일명을 저장시 앞글자는 대문자로 저장을 한다.(App.js)</p>
    </>
  );
}

export default Study5;