import React from 'react';
import Special from './Special';
import './Kully.css';

function Kully(props) {
  return (
    <div className="kully">
      <h2>
        <img src={`${process.env.PUBLIC_URL}/images/kully_logo.png`} alt='로고'/>
      </h2>
      <h3>MD의 추천</h3>
      <div className='cate'>
        <button>신선코너</button>
        <button>간편식사</button>
        <button>채소</button>
      </div>

      {/* 상품목록 */}
      <Special />

    </div>

  );
}

export default Kully;