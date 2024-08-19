import React, { Component } from 'react';

class Kullyc extends Component {
  render() {
    return (
      <>
        <h2>이 상품 어때요??</h2>
        <ul className="product_list">
          <li><img src={`${process.env.PUBLIC_URL}/images/01.jpg`} alt="" /></li>
          <li><img src={`${process.env.PUBLIC_URL}/images/02.jpg`} alt="" /></li>
          <li><img src={`${process.env.PUBLIC_URL}/images/03.jpg`} alt="" /></li>
          <li><img src={`${process.env.PUBLIC_URL}/images/04.jpg`} alt="" /></li>
        </ul>
      </>
    );
  }
}

export default Kullyc;