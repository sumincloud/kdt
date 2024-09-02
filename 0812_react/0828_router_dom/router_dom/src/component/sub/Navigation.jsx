import React from 'react';
import {Link} from 'react-router-dom'

function Navigation(props) {
  return (
    <nav className='navi'>
      <ul>
        <li><Link to="/">HOME</Link></li>
        <li><Link to="/profile">PROFILE</Link></li>
        <li><Link to="/project1">PROJECT1</Link></li>
        <li><Link to="/project2">PROJECT2</Link></li>
        <li><Link to="/project3">PROJECT3</Link></li>
        <li><Link to="/project4">PROJECT4</Link></li>
        <li><Link to="/movie">MOVIE</Link></li>
        <li><Link to="/contact">CONTACT</Link></li>
        <li></li>
      </ul>
      
    </nav>
  );
}

export default Navigation;