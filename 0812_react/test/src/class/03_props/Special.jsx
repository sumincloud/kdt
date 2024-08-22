import React from 'react';
import Product from './Product';

function Special(props) {
  return (
    <div className='product_box'>
      <div className='product'>
        <div className='img_box'>
          <img src={`${process.env.PUBLIC_URL}/images/간편식사_1.jpg`}  alt='상품'/>
        </div>
        <Product title="[사미헌] 갈비탕" sale="0.13" price="15000" />
      </div>
      <div className='product'>
        <div className='img_box'>
          <img src={`${process.env.PUBLIC_URL}/images/간편식사_1.jpg`}  alt='상품'/>
        </div>
        <Product title="[사미헌] 홍합탕" sale="0.15" price="17000" />
      </div>
      <div className='product'>
        <div className='img_box'>
          <img src={`${process.env.PUBLIC_URL}/images/간편식사_1.jpg`}  alt='상품'/>
        </div>
        <Product title="[사미헌] 짬뽕탕" sale="0.20" price="21000" />
      </div>
    </div>
  );
}

export default Special;