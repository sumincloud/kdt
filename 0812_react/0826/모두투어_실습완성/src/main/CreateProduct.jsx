import React from 'react';

function CreateProduct({image, name, price, onDataChange, onCreate}) {
  return (
    <div className="create">
      <p>
        <label for="img_name">이미지 파일명 : </label>
        <input type="text" name="image" id="img_name" placeholder="이미지 파일명을 입력하세요. 예) 파일명.확장자" onChange={onDataChange} value={image} />
      </p>
      <p>
        <label for="product_name">상품명 : </label>
        <input type="text" id="product_name" name="name" placeholder="상품명을 입력하세요. 예)괌 4박 5일 PIC골드" onChange={onDataChange} value={name} />
      </p>
      <p>
        <label for="price_info">가격정보 : </label>
        <input type="text" id="price_info" name="price" placeholder='가격정보를 입력하세요. 예) 999,999' onChange={onDataChange} value={price} />
      </p>
      <p>
        <input type="button" value="내용입력" onClick={onCreate} className="submit_btn" />
      </p>
    </div>
  );
}

export default CreateProduct;