import React from 'react';

function Product({title, sale, price}) {
  // sale을 백분율로 변환 (예: 0.13 -> "13")
  const salePercentage = (sale * 100).toFixed(0);

  return (
    <>
    {/* special콤포넌트(부모)로 부터 전달받은 내용을 아래 태그에 삽입하여 출력한다. */}
      <p>{title}</p>
      <p>{Number(price).toLocaleString()}원</p>
      <div className="discount">
        <span>{salePercentage}%</span>
        <span>{(price * (1 - sale)).toLocaleString()}원</span>
      </div>
    </>
  );
}

export default Product;