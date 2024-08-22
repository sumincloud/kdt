import React from 'react';

function Array2(props) {

  //1. for문으로 배열데이터 출력하기
  const numbers = [1, 3, 5];
  for(let i=0;i<numbers.length;i++){
    console.log(numbers[i]);
  }

  //2. map함수를 사용하여 숫자데이터 출력하기
  const numbers2 = [1, 3, 5, 7, 9];
  const listItems = numbers2.map((number, idx)=>{
    console.log(number);
  })
  // const 객체명 = 배열명.map((배열 내 현재값, 배열 내 인덱스값)=>{
  //   출력할 값
  // })

  //3. map함수로 요일 출력하기
  const yoils = ['일', '월', '화', '수', '목', '금', '토'];
  const yData = yoils.map((yoil, i)=>{
    console.log(yoil); //배열 값 출력
  })

  //4. map함수로 요일 앞에 특수문자 출력하기
  const yoils2 = ['일', '월', '화', '수', '목', '금', '토'];
  const yData2 = yoils2.map(yoil=>`★${yoil}`)
  console.log(yData2); //배열 객체 출력


  //5. map함수로 숫자에 제곱근 구하려 출력하기
  const numbers3 = [4, 9, 16, 25, 36];
  const result = numbers3.map(Math.sqrt);
  console.log(result);


  //6. map함수로 숫자배열에 2를 곱한 결과를 새로운 배열로 출력하기
  const numbers4 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
  //방법1
  const result2 = numbers4.map(number=>number*2);
  console.log(result2);
  //방법2
  // const result2 = numbers4.map(function(number){
  //   return number*2;
  // });
  // console.log(result2);


  //객체 타입의 데이터
  let students = [
    {id:1, name:'홍길동'},
    {id:2, name:'이순신'},
    {id:3, name:'강감찬'},
    {id:4, name:'유관순'}
  ];
  //map함수로 students 배열객체 안의 데이터 중 name값만 골라 새로운 배열로 출력
  const names = students.map(student=>student.name);
  console.log(names);






  
  return (
    <>
      <p>4. 배열복습 - 연관된 데이터를 출력하는 방법에 대해 학습하기.</p>
      <ol>
        <li>숫자데이터 배열을 for문으로 출력해보기</li>
        <li>map함수를 사용하여 '숫자데이터' 출력하기</li>
        <li>map함수를 사용하여 '요일데이터' 출력하기</li>
        <li>map함수를 사용하여 '특수문자+요일' 출력하기</li>
        <li>map함수를 사용하여 '제곱근' 출력하기</li>
        <li>map함수를 사용하여 '숫자배열*2' 출력하기</li>
      </ol>
      <p>map함수는 기존의 배열 callbackFunction에 의해서 새로운 배열을 만드는 함수이다. 기존 배열에는 영향을 미치지 않는다.</p>
    </>
  );
}

export default Array2;