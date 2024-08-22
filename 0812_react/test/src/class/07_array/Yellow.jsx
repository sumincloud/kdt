import React from 'react';
import dummy from './data/products.json';
import './product.css';

function Yellow(props) {
  return (
    <>
      <h4>추석연휴 장거리 바로출발!</h4>
      <ul className='Yellow'>
        {dummy.products.map(product=>(
          <li key={product.title}>
            <div>
              <img src={`${process.env.PUBLIC_URL}/images/${product.filename}`} alt="상품이미지" />
            </div>
            <h5>{product.title}</h5>
            <span>{product.price}</span>
          </li>
          ))}
      </ul>
    </>
  );
}

export default Yellow;