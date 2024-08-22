import React, { Component } from 'react';

class Form6 extends Component {
  state = {
    description : '리엑트에서 textarea내용 작성하기',
    menu:''
  }

  menuChange=(e)=>{
    // let n = e.target.name; //이름
    // let v = e.target.value; //값
    // const {name, value} = e.target;
    // this.setState({
    //   [name]:value
    // });
    let m = e.target.value;
    this.setState({menu:m});
  };

  render() {
    return (
      <>
        <h4>textarea, select태그 사용하기</h4>
        <p>html에서는 textarea작성하고 안에 내용을 적지만 React jsx문법에서는 textarea value=함수명으로 작성한다.</p>

        <pre>태그문법 - 
            *html문법    <textarea>내용적기</textarea>
            *jsx문법       textarea value=내용적기
        </pre>

        <textarea name="" id="" cols="30" rows="10" value={this.state.description} />

        <p>elect태그</p>
        <pre>
            *태그문법 -   
              <select>
                <option value="">선택목록1</option>
                <option value="">선택목록2</option>
                <option value="">선택목록3</option>
              </select>
              <br />
              *jsx문법 -   
              <select value="변수">
                <option value="">선택목록1</option>
                <option value="">선택목록2</option>
              </select>
              <br />
              - select태그에 작성한 value속성에 작성한 값이 선택됨.
          </pre>

        <h4>맛있는 점심메뉴 고르세요</h4>
        <select onChange={this.menuChange}>
          <option value="">옵션선택</option>
          <option value="중국음식">중국음식</option>
          <option value="김치찌개">김치찌개</option>
          <option value="햄버거">햄버거</option>
          <option value="한솥도시락">한솥도시락</option>
          <option value="분식">분식</option>
        </select>

        <h4>문. 위 목록을 선택하면 아래 선택한 상태값이 출력되게 한다.</h4>
        
        <p>{this.state.menu}</p>
      </>
    );
  }
}

export default Form6;