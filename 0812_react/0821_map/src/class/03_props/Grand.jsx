import React, { Component } from 'react';
import Father from './Father';
import Child_2 from './Child_2';

class Grand extends Component {
  render() {
    return (
      <>
        <h3>Grand 콤포넌트</h3>
        <Father>
          <Child_2 />
        </Father>

        {/* <Father />
        <Child_2 /> */}
      </>
    );
  }
}

export default Grand;