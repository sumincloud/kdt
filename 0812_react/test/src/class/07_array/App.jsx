import React from 'react';
import Main from './Main';


function App(props) {
  const names=['홍길동', '이순신', '강감찬', '유관순']
  const nameList = names.map((name)=>(<Main name={name} />))
  return (
    <>
      <p>부모 컴포넌트인 App으로부터 내려받은 props값을 출력할 수 있다.</p>
      {nameList}

      <ul>
        <li>map함수 사용시 key값을 설정해야 한다.</li>
        <li>이유는 요소의 리스트를 만들때, React에서는 컴포넌트를 렌더링할때 어떤 아이템이 변경되었는지 빠르게 감지하기 위해 사용한다. (변경, 추가, 삭제 등)</li>
        <li>만약 key값이 설정되지 않는다면  가상 DOM을 순차적으로 비교하면서 감지를 하기 때문에 key가 없을때보다 페이지 로딩속도가 느리다.</li>
        <li>map함수 인자로 전달되는 함수 내부의 컴포넌트 props를 설정하는 것과 같이 작성한다.</li>
        <li>key값은 요소의 고유한 값이어야 한다. 배열요소의 고유한 값을 사용하거나 index로 사용한다. (단, index는 배열순서가 변경되면 index도 바뀌기 때문에 권장하지는 않는다.)</li>
      </ul>
    </>
  );
}

export default App;