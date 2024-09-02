import React from 'react';

function Student({student, onRemove}) {
  return (
    <>
      <div>
        <label>이름:</label>
        {student.name}
        <label>나이 : </label>
        {student.age}
        <label>이메일 주소</label>
        {student.email}
        <button onClick={()=>onRemove(student.id)}>삭제</button>
        <hr />
      </div>
    </>
  );
}

export default Student;