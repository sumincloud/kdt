import React, {useState} from 'react';

function Counter2(props) {
  const [num, setNum] = useState(0);
  const onPlus1 = () => {
    setNum(num + 1);
  }

  const onMinus1 = () => {
    if(num==0){
      setNum(0);
    }else{
      setNum(num-1);
    }
  }

  return (
    <>
      <h2>2. 함수형 콤포넌트로 숫자증가,감소 만들기</h2>
      <h3>{num}</h3>
      <input type="button" value="+" onClick={onPlus1}></input>
      <input type="button" value="-" onClick={onMinus1}></input>
    </>
  );
}

export default Counter2;