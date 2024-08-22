import React, { Component } from 'react';
import Array1 from './Array1';
import Array2 from './Array2';
import App from './App';
import Yellow from './Yellow';

class Study12 extends Component {
  render() {
    return (
      <>
        <h3>배열함수</h3>
        <Array1 /><hr />  
        <Array2 /><hr /> 

        <h3>app컴포넌트를 생성하고 main컴포넌트를 불러와 배열데이터 출력하기</h3>
        <App /><hr /> 

        <h3>json데이터 파일을 활용하여 map함수로 데이터 출력하기(노랑풍선)</h3>
        <Yellow /><hr /> 
      </>
    );
  }
}

export default Study12;