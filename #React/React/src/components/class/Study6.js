import React from 'react';
import '../Style.css';

function Stydy6(props) {
  const styling = {
    backgroundColor:'green',
    color:'#00f'
  }
  return (
    <>
      <h2>02. 리액트에서 css적용하기</h2>
      <ol>
        <li style={{color:'#f00', background:'#ff0'}}>inline style</li>
        <li style={styling}>변수로 객체처리</li>
        <li className='text01'>import방식(외부스타일)</li>
        <li className='text01'>className - css에서는 class로 이름적용하지만 리액트에서는 className으로 선언하여 이름을 작성한다.(홑따옴표)</li>
        <li>css module방식</li>
      </ol>
    </>
  );
}

export default Stydy6;