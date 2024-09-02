import React from 'react';
import ProductList from '../main/ProductList';
import '../css/product.css';

function Main(props) {
  return (
    <main>
      <h2>모두투어 상품 입력/출력폼</h2>
      <ProductList />
    </main>
  );
}

export default Main;