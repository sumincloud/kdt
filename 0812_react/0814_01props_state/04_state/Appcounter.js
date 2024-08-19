import React, { Component } from 'react';
import Counter from './Counter';
import Counter2 from './Counter2';

class Appcounter extends Component {
  render() {
    return (
      <>
        <Counter /> 
        <hr />
        <Counter2 />
      </>
    );
  }
}

export default Appcounter;