import React, { Component } from 'react';

class Kullyp extends Component {
  render() {
    return (
      <>
        <main>
          <article>
            <h2>이미지 슬라이드</h2>
            <p><img src={`${process.env.PUBLIC_URL}/images/slide01.jpg`} alt="" /></p>
          </article>
          <article>
            {this.props.children}
          </article>
        </main>
        
      </>
    );
  }
}

export default Kullyp;