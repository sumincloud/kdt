import React, {useState, useRef} from 'react';
import Student from './Student';
import StudentInput from './StudentInput';

function StudentList() {
  const [students, setStudents] = useState([
    {
      id:'st001',
      name:'김남준',
      age:28,
      email:"rm@gmail.com"
    },
    {
      id:'st002',
      name:'김석진',
      age:30,
      email:"kim111@gmail.com"
    },
    {
      id:'st004',
      name:'오수진',
      age:21,
      email:"ohsujin@gmail.com"
    },
    {
      id:'st005',
      name:'최명길',
      age:33,
      email:"choigil@gmail.com"
    },
    {
      id:'st005',
      name:'김남준',
      age:28,
      email:"kim1924@gmail.com"
    }
  ]);

  //데이터 초기값 6로 설정
  const nextId = useRef(6);

  //입력상자에서 사용할 값을 state관리
  const [inputs, setInputs] = useState({
    name:'',
    age:'',
    email:''
  });

  //비구조화 할당 - state값을 각각 변수에 담기
  const {name, age, email} = inputs;

  //데이터 변경을 위한 함수
  const onDataChange =(e)=>{
    //name과 value는 값이 변경되는 input태그의 속성을 비구조화 할당 한다.
    const {name, value} = e.target;

    //state값 변경
    setInputs({
      ...inputs, //기존데이터 배열에 새롭게 데이터 추가하는 문법
      [name]:value //내부에서 밖의 변수를 속성명으로 사용시 [변수명]으로 작성
    });
  };
  
  //'추가'버튼 클릭시 데이터 배열에 추가
  const onCreate=()=>{
    //추가하기 위한 객체
    const student = {
      id:'st00'+nextId.current,
      name,
      age,
      email
    };
    //스프레드 연산자 - 기존 student배열에 새로운 값을 이어서 추가한다.
    setStudents([...students, student]);
    setInputs({
      name:"",
      age:"",
      email:""
    });
    //id값을 1씩 증가해준다.
    nextId.current +=1;
  }

  //'삭제'버튼 클릭시 해당 배열번호 데이터를 삭제
  const onRemove=(id)=>{
    //student.id가 매개변수로 작성하지 않은 데이터들만 추출해서 새로운 배열을 만듬
    //student.id가 id와 같은 데이터를 삭제한다.
    setStudents(students.filter((student) => student.id !==id ));
  }

  return (
    <div>
      <StudentInput 
      name={name}
      age={age}
      email={email}
      onDataChange={onDataChange}
      onCreate={onCreate}
      />

      {/* 데이터의 개수만큼 맵함수로 배열 출력함. */}
      {students.map((student)=>(
        <Student student={student} key={student.id} onRemove={onRemove} />
      ))}
      
    </div>
  );
}

export default StudentList;