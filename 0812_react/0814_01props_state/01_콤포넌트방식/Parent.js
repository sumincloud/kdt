import React, { Component } from 'react';
import Child from './Child.js';

class Parent extends Component {
  render() {
    return (
      <>
        <Child name="김철수" age="20" hobby="등산" />
        <hr />
        <Child name="홍길동" age="24" hobby="영화보기" />
        <hr />
        <Child />
      </>
    );
  }
}

export default Parent;