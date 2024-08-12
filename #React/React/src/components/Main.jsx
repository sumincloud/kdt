import React from 'react';
import Study5 from './class/Study5';
import Study6 from './class/Study6';
import Study7 from './class/Study7';
import Kully from './class/Kully';
import './Style.css';

function Main(props) {
  return (
    <>
      <h3>리액트 5일차 수업내용</h3>
      <Study5 />
      <h3>리액트 6일차 수업내용</h3>
      <Study6 />
      <Study7 />
      <h3>마켓컬리</h3>
      <Kully />
    </>
  );
}

export default Main;