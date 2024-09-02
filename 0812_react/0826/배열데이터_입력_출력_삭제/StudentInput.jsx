import React from 'react';

function StudentInput({name, age, email, onCreate, onDataChange}) {
  const style={
    width:"600px",
    margin:"20px",
    padding:"10px",
    border:"3px solid #333"
  }
  const input01={
    height:"30px",
    margin:"3px"
  }
  return (
    <div style={style}>
      <input style={input01} type="text" name="name" placeholder='이름을 입력하세요' value={name} onChange={onDataChange} />

      <input style={input01} type="text" name="age" placeholder="나이를 입력하세요" value={age} onChange={onDataChange} />

      <input style={input01} type="text" name="email" placeholder="메일주소를 입력하세요" value={email} onChange={onDataChange} />
      
      <button onClick={onCreate}>추가</button>
    </div>
  );
}

export default StudentInput;