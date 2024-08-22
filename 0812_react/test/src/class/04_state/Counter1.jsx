import React, { Component } from 'react';

class Counter1 extends Component {
  // javascript내용작성
  state = {  //초기값 설정
    num:0
  }

  onPlus =()=>{
    //console.log('플러스');
    this.setState({
      num:this.state.num+1
    });
  }

  onMinus =()=>{
    //console.log('마이너스');
    if(this.state.num>0){ //0보다 클경우만 1감소
      this.setState({
        num:this.state.num-1
      })
    }
  }

  render() {
    return (
      <>
        <button onClick={this.onPlus}>+</button>
        <span>{this.state.num}</span>
        <button onClick={this.onMinus}>-</button>
      </>
    );
  }
}

export default Counter1;