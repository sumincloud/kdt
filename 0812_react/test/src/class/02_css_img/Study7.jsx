import React from 'react';
import logo from '../../images/logo.png';

function Stydy7(props) {
  return (
    <>
      <h3>03. 리액트에서 이미지 삽입하기</h3>
      <ul>
        <li>public폴더에서 이미지 가져오는 3가지 방법</li>
        <li>src폴더에 있는 이미지 - import</li>
        <li>src폴더에 있는 이미지 - require</li>
        <li>css에서 이미지 경로 설정</li>
        <li></li>
      </ul>

      <img src={`${process.env.PUBLIC_URL}/images/logo.png`} alt='로고'/>
      <br />
      <img src={logo} alt="로고"/>
      <br />
      <img src={require('../../images/logo.png')} alt="로고"/>

      <p>jsx파일에서 절대경로는 public폴더를 기준으로 함.</p>
      <p>css파일에서는 절대경로는 src폴더를 기준으로 함.</p>
      <p>리액트에서는 jsx파일로 작성시 환경변수 PUBLIC_URL을 사용할 것을 권장.(github에 업로드시에도 PUBLIC_URL로 설정된 이미지가 정상적으로 노출됨)</p>
    </>
  );
}

export default Stydy7;