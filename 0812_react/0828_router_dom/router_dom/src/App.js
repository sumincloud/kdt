import { BrowserRouter, Routes, Route } from 'react-router-dom';
import './App.css';
import Header from './component/Header';
import Main from './component/Main';
import Footer from './component/Footer';
import Product from './component/Product';
import NotFound from './component/NotFound';

import Profile from './component/sub/Profile';
import Project1 from './component/sub/Project1';
import Project2 from './component/sub/Project2';
import Project3 from './component/sub/Project3';
import Project4 from './component/sub/Project4';
import Movie from './component/sub/Movie';
import Contact from './component/sub/Contact';

//npm i react-router-dom
//npm i axios 둘 다 플러그인 설치하기


function App() {
  return (
    <>
      <BrowserRouter>
        <Header />
        <Routes>
          <Route path='/' element={<Main />}></Route>
          <Route path='/product/:productId' element={<Product />} ></Route>
          <Route path='*' element={<NotFound />} ></Route>
          <Route path='/profile' element={<Profile />} ></Route>
          <Route path='/project1' element={<Project1 />} ></Route>
          <Route path='/project2' element={<Project2 />} ></Route>
          <Route path='/project3' element={<Project3 />} ></Route>
          <Route path='/project4' element={<Project4 />} ></Route>
          <Route path='/movie' element={<Movie />} ></Route>
          <Route path='/contact' element={<Contact />} ></Route>
          {/* 상단에 위치하는 라우트들의 규칙을 모두 확인, 일치하는 라우트가 없는 경우는 notFound가 나오게 한다. */}
        </Routes>
        <Footer />
      </BrowserRouter>
    </>
  );
}

export default App;
