import React from 'react';
import './css/TodoListTemplate.css'

function TodoListTemplate({form, children}) {
  return (
    <main className="todo_list_template">
      <div className="title">
        오늘의 할 일
      </div>
      <section className="form_wrapper">
        {form}
      </section>
      <section className="todos_wrapper">
        {children}
      </section>
    </main>
  );
}

export default TodoListTemplate;