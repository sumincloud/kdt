import React, { Component } from 'react';

class Father extends Component {
  render() {
    return (
      <>
        <h3>Father 콤포넌트</h3>
        <p>Father 콤포넌트의 내용입니다.</p>
        <div>{this.props.children}</div>
        <p>내용 요약 - this.props는 부모콤포넌트가 자손콤포넌트에게 내려주는 속성값으로서 부모콤포넌트가 자손콤포넌트 child_2를 감싸고 있기 때문에 속성값을 불러올 수 있습니다.</p>
      </>
    );
  }
}

export default Father;