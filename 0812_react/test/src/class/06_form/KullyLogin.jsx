import React, { Component } from 'react';
import './Login.css';

class KullyLogin extends Component {
      loginCheck = () => {
        let id = document.getElementById('id_txt').value;
        let pw = document.getElementById('pw_txt').value;

      if(id === 'master'){
        if(pw === '1234'){
          alert('로그인 성공');
        }else{
          alert('패스워드가 틀립니다. 다시확인하세요.');
        }
      }else{
        alert('아이디가 맞지 않습니다. 다시확인하세요.');
      }
    }
      state = {
        name: '',
        age: null
    }

    nameChange = (e) => {
        let n = e.target.name;
        let v = e.target.value;
        this.setState({
            [n]: v
        });
    }
  render() {
    return (
      <>
        <form>
        <fieldset className="login_form">
          <legend>로그인</legend>
          <label for="id_txt">아이디 : </label>
          <input type="text" id="id_txt" placeholder='아이디를 입력하세요' name='name'
                    onChange={this.nameChange} />

          <label for="pw_txt">패스워드 : </label>
          <input type="text" id="pw_txt" placeholder='패스워드를 입력하세요' name='age'
                    onChange={this.nameChange} />

        <p>
          <a href="#a" title="아이디 찾기">아이디 찾기</a>
            &#x007C; 
            <a href="#a" title="비밀번호찾기">비밀번호 찾기</a>
        </p>
          <input type="submit" value="로그인" className="login_btn" onClick={this.loginCheck} />
          <input type="button" value="회원가입" className="join_btn" />

          <p>아이디는 : {this.state.name}입니다.</p>
          <p>패스워드는 : {this.state.age}입니다.</p>
        </fieldset>      
      </form> 
      </>
    );
  }
}

export default KullyLogin;