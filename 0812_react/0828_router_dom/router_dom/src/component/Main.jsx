import React from 'react';

function Main(props) {
  return (
    <main>
      <section>
        <h2>메인영역</h2>
        <h3>리액트 Router란?</h3>
        <p>Route = 페이지 이동</p>
        <p>라우팅이란? 사용자가 요청한 url에 따라 해당 url주소로 페이지를 이동하는 것이다.</p>
        <p>리액트에서는 route를 사용하기 위해 npm i react-route-dom 패키지를 설치해야한다.</p>
        <p>리액트는 SPA(Single Page Application) 방식으로서 기존의 MPA(Multi Page Application)방식에서는 여러개의 페이지를 사용하여 새로운 페이지를 로드하는 방식이였으나, 리액트에서는 새로운 페이지를 로딩하지 않고, 하나의 페이지(컴포넌트)안에서 필요한 데이터만 로딩하여 출력하는 형태를 가지고 있다.</p>
        <p>React-Router-Dom은 신규페이지를 불러오지 않는 상황에서 각각의 url에 따라 선택된 데이터를 하나의 페이지에서 렌더링 해주는 라이브러리 이다.</p>

        <h3>리액트 라우터(React Router)</h3>
        <p>사용자가 입력한 주소를 감지하는 역할을 하며, 여러환경에서 동작할 수 있도록 여러종류의 라우터 컴포넌트를 제공한다.</p>
        <p>이중 가장많이 사용하는 라우터 컴포넌트는 BrowerRouter, HashRouter이다.</p>

        <ul>
          <li>BrowerRouter : html5를 지원하는 브라우저의 주소를 감지</li>
          <li>HashRouter : hash주소를 감지</li>
        </ul>

      <br/>
        <h3>리액트 라우터관련 태그</h3>
        <ul>
          <li>BrowerRouter</li>
          <li>Routes컴포넌트는 여러 Route를 감싸서 그중에 규칙이 일치하는 라우트 단 하나를 렌더링 시키는 역할</li>
          <li>Route : path속성에 경로, element속성에 컴포넌트를 넣어주고 여러 라우팅을 매칭하고 싶은 경우에 url뒤에 '*'를 사용</li>
          <li>Link = html5의 a 태그와 같다. 미리보기시 a태그로 변경됨.</li>
        </ul>

        <br></br>
        <h3>쿼리스트링, useLocation</h3>
        <ul>
          <li>hash : 주소의 #문자열 뒤의 값</li>
          <li>pathname : 현재주소경로</li>
          <li>search : ?를 포함한 쿼리스트링</li>
          <li>state : 페이지로 이동시 임의로 넣을 수 있는 상태값</li>
          <li>key : location 객체의 고유값, 초기값은 default, 페이지가 변경될 때마다 고유의 값이 생성 된다.</li>
        </ul>
        

      </section>
      
    </main>
  );
}

export default Main;