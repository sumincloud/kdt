import React, { Component } from 'react';

class Child extends Component {
  render() {
    const {name, age, hobby} = this.props;
    return (
      <>
        {/* <h3>이름 : {this.props.name}</h3>
        <h3>나이 : {this.props.age}</h3>
        <h3>취미 : {this.props.hobby}</h3> */}
        <h3>이름 : {name}</h3>
        <h3>나이 : {age}</h3>
        <h3>취미 : {hobby}</h3>
      </>
    );
  }
}
//기본값을 설정할 수 있다.
Child.defaultProps = {
  name : '홍길동',
  age:20,
  hobby:'코딩'
}

export default Child;