import React, { Component } from 'react';
import axios from 'axios';
import MovieList from '../MovieList';

class Movie extends Component {
  state = { //상태값 관리한다.
    isLoading:true, //값이 true이면
    movies:[], //무비 데이터를 배열로 가져온다
  }
  //axios.get 을 사용하여 무비데이터를 불러와 출력 async, await

  getMovies = async() => {
    const{
      data:{
        data:{movies},
      },
    }=await axios.get('https://yts.mx/api/v2/list_movies.json?sort_by=rating')
    console.log(movies)
    this.setState({movies,isLoading:false})
  }

  componentDidMount(){
    // 영화 데이터 로딩
    setTimeout(() => {
      this.setState({isLoading:false})
    },3000)
    this.getMovies()
  }
  render() {
    const {isLoading, movies} = this.state;
    return (
      <>
        <h3>영화 데이터 로딩하기</h3>
        {isLoading?<img className='LoadingImg' src={`${process.env.PUBLIC_URL}/images/Spinner.gif`} /> :
          (<ul className='movie_list'>
            {movies.map((movie)=>
              <MovieList key={movie.id}
                id={movie.id}
                year={movie.year}
                title={movie.title}
                summary={movie.summary}
                poster={movie.medium_cover_image}
              />
            )}

          </ul>)
        }
      </>
    );
  }
}

export default Movie;