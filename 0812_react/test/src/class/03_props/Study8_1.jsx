import React from 'react';
import Child_1 from './Child_1';

function Study8_1(props) {
  return (
    <>
      <h3>함수형 콤포넌트</h3>
      <Child_1 name="김철수" age="30" hobby="등산" />
      <Child_1 name="홍길동" age="24" hobby="영화감상" />
    </>
  );
}

export default Study8_1;