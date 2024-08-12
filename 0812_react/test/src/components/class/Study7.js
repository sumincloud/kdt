import React from 'react';
import logo from '../images/logo.png';

function Stydy7(props) {
  return (
    <>
      <h2>03. 리액트에서 이미지 삽입하기</h2>
      <ul>
        <li>public폴더에서 이미지 가져오는 3가지 방법</li>
        <li>src폴더에 있는 이미지 - import</li>
        <li>src폴더에 있는 이미지 - require</li>
        <li>css에서 이미지 경로 설정</li>
        <li></li>
      </ul>

      <img src={`${process.env.PUBLIC_URL}/images/logo.png`} alt='로고'/>
      <br></br>
      <img src={logo} alt="로고"/>
      <br></br>
      <img src={require('../images/logo.png')} alt="로고"/>

    </>
  );
}

export default Stydy7;