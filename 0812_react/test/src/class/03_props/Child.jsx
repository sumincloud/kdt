import React, { Component } from 'react';

class Child extends Component {
  render() {

    // 객체 구조화
    const {name, age, hobby} = this.props;
    
    return (
      <>
        {/* <p>이름 : {this.props.name}</p>
        <p>나이 : {this.props.age}</p>
        <p>취미 : {this.props.hobby}</p> */}
        <p>이름 : {name}</p>
        <p>나이 : {age}</p>
        <p>취미 : {hobby}</p>
      </>
    );
  }
}
//부모로 부터 전달받지 못한 콤포넌트는 기본값을 지정할 수 있다.
Child.defaultProps={
  name:'000',
  age:'20',
  hobby:'독서'
}

export default Child;