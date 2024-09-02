import React, {Component} from 'react';
import './App.css';
import TodoListTemplate from './components/TodoListTemplate';
import Form from './components/Form';
import TodoItemList from './components/TodoItemList';

class App extends Component {
  id=3; //아래 미리 3개의 값을 입력함.
  state={
    input:'',
    todos:[
      {id:0, text:'리엑트 학습하기',checked:false},
      {id:1, text:'투두리스트 만들기',checked:true},
      {id:2, text:'리엑트 어려워요',checked:false}
    ]
  }
  //- 텍스트 내용이 변경되면 state변경
  handleChange = (e) => {
    this.setState({
      input:e.target.value //input의 다음 바뀔값
    });
  }
  //- 버튼이 클릭되면 새로운 todo생성(글목록)
  handleCreate = () =>{
    const {input, todos} = this.state;
    this.setState({
      input:'', //입력버튼 클릭하면 기존값은 비운다.
      todos:todos.concat({ //기존 배열값에 데이터 추가하여 배치 (=push)
        id:this.id++,
        text:input,
        checked:false
      })
    })
  }
  //'enter'쳐도 글 입력되게 함.
  handleKeyPress = (e) => {
    if(e.key === 'Enter'){
      this.handleCreate();
    }
  }

  handleToggle = (id) => {
    const {todos} = this.state;

    //파라미터로 받은 id를 가지고 몇번째 아이템인지 확인한다.
    const index = todos.findIndex(todo=>todo.id ===id);
    const selected = todos[index]; //내가 선택한 객체

    const nextTodos = [...todos]; //기본 배열객체를 복사 새로운 배열생성

    //기존값들을 복사하고 checked값을 적용
    nextTodos[index]={
      ...selected,
      checked:!selected.checked
    }
    this.setState({
      todos:nextTodos
    });
  }
  //목록 글 삭제버튼 클릭시 배열에 있는 값이 삭제되는 함수
  handleRemove = (id) =>{
    const {todos} = this.state;
    this.setState({
      todos:todos.filter(todo => todo.id!==id)
    });
  }

  render(){
    const {input, todos} = this.state;
    const {
      handleChange,
      handleCreate,
      handleKeyPress,
      handleToggle,
      handleRemove
    }=this;
    return (
      <>
        <TodoListTemplate form={(
          <Form 
            value={input}
            onKeyPress={handleKeyPress}
            onChange={handleChange}
            onCreate={handleCreate}
          />
        )}>
          <TodoItemList todos={todos} onToggle={handleToggle} onRemove={handleRemove} />
        </TodoListTemplate>
      </>
    );
  }
}

export default App;
