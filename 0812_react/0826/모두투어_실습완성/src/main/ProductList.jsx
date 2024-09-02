import React, {useState, useRef} from 'react';
import Product from './Product';
import CreateProduct from './CreateProduct';
// import dummy from '../db/product.json';

function ProductList(props) {
  const [products, setProducts] = useState([
    {
      id:1, 
      image:"img1.png", name:"[핫플레이스관광] 괌 리가로얄라구나 오션뷰룸", 
      price:"699,000"
    },
    {
      id:2,
      image:"img2.png",name:"사이판 크라운 플라자 리조트 스탠다드 마운틴뷰 4/5/6일",
      price:"878,600"
    },
    {
      id:3,
      image:"img3.png",
      name:"괌 두짓타니 디럭스오션프론트 3박4일",
      price:"1,136,000"
    },
    {
      id:4,
      image:"img4.jpg",
      name:"괌 PIC - 괌최대워터파크이용 4/5/6일",
      price:"929,000"
    } 
  ]);

  const nextId = useRef(5);

  //입력상자에서 사용할 값을 state로 관리한다.
  const [inputs, setInputs] = useState({
    image:"",
    name:"",
    price:""
  });

  //삭제하기 버튼 클릭시 해당 id를 찾아서 삭제한다.
  const onRemove = (id) =>{
    //
    setProducts(products.filter((product)=>product.id!==id));
  }

  //비구조화 할당 방식으로 각각 state값 변수에 담기
  const {image, name, price} = inputs;

  //데이터 변경함수
  const onDataChange = (e) => {
    //여기서의 name과 value는 값이 변경되는 input태그의 속성을 비구조화할당
    const {name, value} = e.target;

    //state값 변경
    setInputs({
      ...inputs, //변경되는 것 외의 나머지 속성값을 의미하는 나머지 패턴
      [name]:value
    });
  };

  const onCreate = () => {
    //새롭게 배열 데이터를 추가하는 함수
    const product = {
      id:'a'+nextId.current, //배열값앞에 문자를 붙여서 복사를 방지
      image,
      name,
      price
    };

    //기본 배열(목록)뒤에 입력한 내용을 추가한다.
    setProducts([...products, product]);

    //데이터 입력후 입력박스의 값은 초기화한다.
    setInputs({
      image:'',
      name:'',
      price:''
    });

    nextId.current += 1; //마지막 번호에 1을 더함.
  };

  return (
    <>
      <CreateProduct 
        image={image}
        name={name}
        price={price}
        onDataChange={onDataChange}
        onCreate={onCreate}
      />
      <ul className='product_list'>
        {products.map((product=>(
          <Product product={product} key={product.id} onRemove={onRemove} />
        )))}
      </ul>

    </>
  );
}

export default ProductList;