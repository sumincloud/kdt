import React from 'react';
import Product from './Product';

function Special(props) {
  return (
    <>
      <h3>지금 가장 많이 담는 특가</h3>
      <ul>
        <li><Product title="삼계탕" sale="13%" price="15,000원" /></li>
        <li><Product title="삼계탕" sale="13%" price="15,000원" /></li>
        <li><Product title="삼계탕" sale="13%" price="15,000원" /></li>
        <li><Product title="삼계탕" sale="13%" price="15,000원" /></li>
        <li><Product title="삼계탕" sale="13%" price="15,000원" /></li>
      </ul>
    </>
  );
}

export default Special;