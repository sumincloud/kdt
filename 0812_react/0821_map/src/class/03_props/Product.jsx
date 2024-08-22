import React from 'react';

function Product({title, sale, price}) {
  return (
    <>
    {/* special콤포넌트(부모)로 부터 전달받은 내용을 아래 태그에 삽입하여 출력한다. */}
      <p>{title}</p>
      <span>{sale}</span>
      <span>{price}</span>
    </>
  );
}

export default Product;