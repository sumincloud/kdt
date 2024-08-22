import React, { Component } from 'react';
import Form1 from './Form1';
import Form2 from './Form2';
import Form3 from './Form3';
import Form4 from './Form4';
import Form5 from './Form5';
import Form6 from './Form6';
import KullyLogin from './KullyLogin';

class Study11 extends Component{
  render(){
    return(
      <>
        <h3>React Forms</h3>

        <p>html에서 폼태그와 마찬가지로 React에서도 사용자가 웹페이지에서 상호작용(interaction)을 하도록 할수있다.</p>
        <ul>
          <li>nameChange : 이름 변경을 위한 함수명</li>
          <li>e.target.value : 이벤트 객체의 매개변수 e의 값</li>
          <li>state : 자기자신의 콤포넌트에서 변경이 되는 값을 저장하기 위한 곳</li>
          <li>setState()함수 : state값을 변경하기 위한 함수</li>
        </ul>
      
        <Form1 /><hr />
        <Form2 /><hr />
        <Form3 /><hr />
        <Form4 /><hr />
        <Form5 /><hr />
        <Form6 /><hr />
        <KullyLogin /><hr />
      </>
    )
  }
}
export default Study11;