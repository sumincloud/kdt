import React from 'react';

function Array(props) {
  // 배열 객체 생성
  let array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  //console.log(array); //데이터 전부출력
  //console.log(array[0]); //n번째만 출력

  //반복문
  for(let i=0;i<=5;i++){
    //console.log(array[i]);
  }

  //map함수
  const maplist = array.map(function(array){
    //console.log(array);
    // return array+1;
  });
  
  //console.log(maplist); //배열데이터로 출력

  //배열 두번째 추가
  const product1 = ['스페인&포르투갈 9일', '발칸 3국 9일', '서유럽 3국 9일', '호주&뉴질랜드 12일'];

  const product2 = ['1','2','3','4','5'];

  //배열 출력하기
  product1.map(function(a){
    console.log('#' + a); //기호 삽입하기
    return a;
  });

  // product2.map(b=>{
  //   console.log(product2);
  //   return 0;
  // })

  const fruits = ['Apple', 'Banana', 'Cherry'];

  //console.log(fruits);
  //console.log(fruits[0]);

  //map배열로 데이터 출력
  const lowertxt = fruits.map(function(fruit){
    return fruit.toLowerCase(); //문자열을 소문자로 변환
  });

  console.log(lowertxt);
  //apple', 'banana', 'cherry'

  //회원정보 배열데이터 생성하기
  const users = [
    {id:1, name:'홍길동'}, //속성:값
    {id:2, name:'이순신'}, //속성:값
    {id:3, name:'강감찬'} //속성:값
  ]
  //map함수로 배열객체 안에 있는 요소들 중에서
  const names = users.map(function(user){
    return user.name; //이름만 골라낸다.
  });
  console.log(names); //출력해본다.

  //console.log(users);//object라고 나옴 == 객체

  //숫자배열 데이터를 사용하여 2배값을 구하여 짝수번호만 출력하기
  const numbers = [1,2,3,4,5];
  const evenNumber = numbers.map(function(number){
    if(number%2===0){ //나머지값이 0일 경우==짝수일 경우
      number = number;
      return number;
      // return '짝수';
    }else{
      return '홀수';
    }    
  });

  console.log(evenNumber);//문자열 배열로 출력

  //짝수만 출력??
  
  return (
    <>
      <h4>반복출력을 위한 배열 데이터 다루기</h4>
      <p>반복문의 종류, 문법을 익히고 데이터를 출력해본다.</p>

      <ul>
        <li>for문</li>
        <li>while문</li>
        <li>do while문</li>
      </ul>

      <p>1. for문을 사용하여 데이터 반복출력</p>
      <pre>
        for(초기값;조건식;증감식)
          출력할 내용;
      </pre>

      <p>2. map함수</p>
      <p>배열을 순회해서 각 요소를 콜백 함수로 적용해서 처리해 모은 새로운 배열을 반환하기 위한 함수</p>
      <p>map함수에 전달되는 콜백함수는 '각 요소를 변환하여 새로운 배열로 매핑하는 역할을 한다. 매핑된 결과를 새로운 배열로 반환하기 때문에 이 함수의 이름이 'map'이다.</p>
      <p>원본 배열은 변경하지 않으면서 해당 배열 요소에 대한 규칙적인 새로운 배열을 생성하고자 할 때 사용한다.</p>
      <pre>
        문법) : 
        arr.map(callbackFunction, [thisArg])<br />
        arr.map(callbackFunction(currenValue, index, array), thisArg)
      </pre>
      <ul>
        <li>callbackFunction : 새로운 배열의 요소를 생성하는 함수로 3가지 인수가 있다.</li>
        <li>currenValue : 현재 배열(arr)내의 값들을 의미</li>
        <li>index : 현재 배열 내 값의 인덱스를 의미</li>
        <li>array : 현재 배열</li>
        <li>thisArg(선택항목) : callback 함수 내부에서 사용할 this 레퍼런스를 설정함.</li>
      </ul>

      <p>3. 배열데이터 출력하기</p>
      <p>배열데이터를 가지고 다양한 방법으로 출력해본다.</p>
    </>
  );
}

export default Array;