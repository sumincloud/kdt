import React from 'react';
import {Link} from 'react-router-dom';

function MovieList({year, title, summary, poster}) {
  return (
    <li>
      <Link to="/movie_detail">
        <img src={poster} alt="" />
      </Link>
      <span>{year}</span>
      <h4>{title}</h4>
      {/* <p>{summary.slice(0,30)}...</p> */}
      <p>{summary}</p>
    </li>
  );
}

export default MovieList;