import React from 'react';
// import {Link} from 'react-router-dom';
import {useLocation, useParams,useNavigate} from 'react-router-dom';


function Product(props) {
  const productId = useParams().productId;
  const location = useLocation();
  const navi = useNavigate();
  return (
    <>
      <h3>서브페이지(상품)</h3>
      <p>{productId}번 상품 페이지입니다.</p>
      <ul>
        <li>hash : {location.hash}</li>
        <li>pathname : {location.pathname}</li>
        <li>search : {location.search}</li>
        <li>state : {location.state}</li>
        <li>key : {location.key}</li>
      </ul>

      <p>useNavigate를 사용하여 페이지 버튼 만들기</p>
      <ul>
        <li><button onClick={() => navi(-2)}>뒤로 2페이지 이동</button></li>
        <li><button onClick={() => navi(-1)}>뒤로 1페이지 이동</button></li>
        <li><button onClick={() => navi(1)}>앞으로 1페이지 이동</button></li>
        <li><button onClick={() => navi(2)}>앞으로 2페이지 이동</button></li>
        <li><button onClick={() => navi(31)}>뒤로 2페이지 이동</button></li>
      </ul>

      {/* <ul>
        <li><Link to='./product/1' >1번 상품페이지</Link></li>
        <li><Link to='./product/2' >2번 상품페이지</Link></li>
      </ul> */}
    </>
  );
}

export default Product;