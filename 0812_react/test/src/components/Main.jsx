import React from 'react';
import Study5 from '../class/01_component/Study5';
import Study6 from '../class/02_css_img/Study6';
import Study7 from '../class/02_css_img/Study7';
import Study8 from '../class/03_props/Study8';
import Study8_1 from '../class/03_props/Study8_1';
import Grand from '../class/03_props/Grand';
import Kully from '../class/03_props/Kully';
import Study9 from '../class/04_state/Study9';
import Study10 from '../class/05_event/Study10';
import Study11 from '../class/06_form/Study11';
import Study12 from '../class/07_array/Study12';


import '../Style.css';

function Main(props) {
  return (
    <main className='main'>
      <h2>리액트 1일차</h2>
      <p>react소개와 react사이트 검색</p>
      <h2>리액트 2일차</h2>
      <p>cdn방식을 통한 react문서 제작</p>
      <h2>리액트 3일차</h2>
      <p>1. npm을 이용한 create react app설치 - npm, node.js, app</p>
      <p>2. 리액트 폴더구성 이해</p>
      <h2>리액트 4일차</h2>
      <p>1. 웹앱 실행과 배포(닷홈, 깃허브)</p>
      <p>2. 일반 dom, 가상 dom 차이 이해하기</p>
      <h2>리액트 5일차</h2>
      <Study5 />
      <h2>리액트 6일차</h2>
      <Study6 />
      <Study7 />
      <h2>리액트 7일차</h2>
      <p>props, state</p>
      <Study8 />
      <Study8_1 />
      <hr />
      <Grand />
      <hr />
      <Kully />
      <hr />
      <Study9 />
      <h2>리액트 8일차</h2>
      <p>이벤트(event)의 정의와 폼(form)</p>
      <Study10 />
      <hr />
      <Study11 />
      <h2>리액트 9일차</h2>
      <Study12 />
      <hr />
      
    </main>
  );
}

export default Main;