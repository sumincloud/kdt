import React from 'react';
import {Link} from 'react-router-dom'
import Navigation from './sub/Navigation';


function Header(props) {
  return (
    <header className='header'>
      <h1><Link to='/' >상단로고</Link></h1>
      {/* 메인메뉴 */}
      <Navigation />
    </header>
  );
}

export default Header;