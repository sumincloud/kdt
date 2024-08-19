import React, { Component } from 'react';

class Father extends Component {
  render() {
    return (
      <>
        <h3>Father데이터입니다.</h3> 
        <hr />
        <div>{this.props.children} </div>
      </>
    );
  }
}

export default Father;