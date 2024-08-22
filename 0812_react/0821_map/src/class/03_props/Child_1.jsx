import React from 'react';

// function Child_1({name, age, hobby}) {
  const Child_1 = ({name, age, hobby}) => {
  return (
    <>
    <p>함수형 콤포넌트는 함수의 매개변수로 받아서 처리할 수 있다.</p>
    <p>화살표함수 작성법 : const 함수명 = (매개변수) = 출력내용</p>

      <p>이름 : {name}</p>
      <p>나이 : {age}</p>
      <p>취미 : {hobby}</p>
    </>
  );
}

export default Child_1;