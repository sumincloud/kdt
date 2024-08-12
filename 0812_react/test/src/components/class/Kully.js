import React from 'react';

function Kully(props) {


  
  return (
    <div className="kully">
      <h2>
        <img src={`${process.env.PUBLIC_URL}/images/kully_logo.png`} alt='로고'/>
      </h2>
      <hr></hr>
      <h3>MD의 추천</h3>
      <div className='cate'>
        <button>신선코너</button>
        <button>간편식사</button>
        <button>채소</button>

      </div>
      <div className='product'>
        <div className='swiper-slide'>
          <div>
            <img src={`${process.env.PUBLIC_URL}/images/간편식사_1.jpg`}  alt='상품'/>
          </div>
          <p>[사미헌] 갈비탕</p>
          <p>10,900원</p>
          <div class="discount">
            <span>25%</span>
            <span>3,517</span>
            <span>원</span>
          </div>
        </div>
      </div>

    </div>
  );
}

export default Kully;