import React from 'react';
import Child1 from './Child1';

function Parent1(props) {
  return (
    <>
      <Child1 name="김철수" age="20" hobby="등산" />
        <hr />
        <Child1 name="홍길동" age="24" hobby="영화보기" />
        <hr />
    </>
  );
}

export default Parent1;