import React, {useState} from 'react';

function Counter2(props) {
  const [num, setNum] = useState(0);//초기설정값

  const onPlus =()=>{
    console.log('더하기');
    setNum(num+1);
  }

  const onMinus =()=>{
    console.log('빼기');
    if(num>0){
      setNum(num-1);
    }
  }

  return (
    <>
      <button onClick={onPlus}>+</button>
        <span>{num}</span>
      <button onClick={onMinus}>-</button>
    </>
  );
}

export default Counter2;