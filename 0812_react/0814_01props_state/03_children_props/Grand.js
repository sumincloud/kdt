import React, { Component } from 'react';
import Father from './Father';
import Child2 from './Child2';


class Grand extends Component {
  render() {
    return (
      <>
        <Father>
          <Child2 />
        </Father>
      </>
    );
  }
}

export default Grand;