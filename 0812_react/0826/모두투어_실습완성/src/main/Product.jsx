import React from 'react';

function Product({product, onRemove}) {
  return (
    <>
      <li>
        <img src={`${process.env.PUBLIC_URL}/images/${product.image}`} alt="" />
        <p>상품명 : {product.name}</p>
        <p className="price">가격 : {product.price}</p>
        <p><input type="button" className="btn" value="삭제하기" onClick={()=>onRemove(product.id)} /></p>
      </li>
    </>
  );
}

export default Product;