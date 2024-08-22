import React, { Component} from 'react';

class Form4 extends Component {
  state = {
    name:'',  //이름 초기값
    id_txt:'', //아이디 초기값
    // reset1:'',
    // reset2:''
  }

  //키보드로 사용자가 입력하면 아래 내용 실행
  nameChange = (e) => { //화살표 함수
    let n = e.target.name; //속성
    let id_t = e.target.value; //값

    this.setState({
      [n]:id_t //배열데이터
    });
  }

  //텍스트 지우기
  onDelete = () => {
    //alert('입력한 내용 지우기');
    //출력한 값을 지우기
    document.getElementById('name').value="";
    document.getElementById('id').value="";

    //상태 관리값을 초기화
    // this.setState({reset1:this.state.name=''});
    // this.setState({reset2:this.state.id_txt=''});

    //2번 방법
    this.setState({
      name:'',
      id_txt:''
    })
  }
  render() {
    return (
      <>
        <h4>4. 여러개의 input태그의 데이터 관리하기</h4>
        <ul>
          <li>e.target.value : 값에 접근하기</li>
          <li>e.target.name : name속성값에 접근하기</li>
          {/* <input type='text' id="id_txt" name="id_txt" /> */}
          <li>this.setState({`[변수명] : 값`}) : 속성명에 변수값을 사용하려면 대문자로 표시해야한다.</li>
          <li>nameChange : 값을 입력하였을 때 발생되는 이벤트 함수</li>
        </ul>
        
        <form onSubmit={this.onDelete}>
          <p>출력내용(이름) : </p>
          <input type="text" id="name"
          name="name" value={this.state.name}
          onChange={this.nameChange}
          />

          <p>출력내용(아이디) : </p>
          <input type="text" id="id"
          name="id_txt" value={this.state.id_txt}
          onChange={this.nameChange}
          />

          <p>입력하신 이름은 '{this.state.name}'이고 아이디는 '{this.state.id_txt} '입니다.</p>

          <p>문. button(다시쓰기)을 하나 만들어서 클릭시 해당 이름과 아이디를 지우기</p>

          <input type="button" value='다시쓰기' onClick={this.onDelete} />
        </form>
      </>  
    );
  }
}

export default Form4;