<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $movie = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=54b54789869bd622ae6652b4d6c16ca5')->json(); 
       


        $popularMovie = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1NGI1NDc4OTg2OWJkNjIyYWU2NjUyYjRkNmMxNmNhNSIsInN1YiI6IjYxNTUzMzQ2OWY1ZGZiMDA2MmY0YTk2YiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.1V9sl8r97aiVAHdKpsd-E36Y1PdzN4avfY0jGA7kXmk'
        )->get('https://api.themoviedb.org/3/movie/popular')
        ->json()['results'];
        
        $upcomingMovie = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1NGI1NDc4OTg2OWJkNjIyYWU2NjUyYjRkNmMxNmNhNSIsInN1YiI6IjYxNTUzMzQ2OWY1ZGZiMDA2MmY0YTk2YiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.1V9sl8r97aiVAHdKpsd-E36Y1PdzN4avfY0jGA7kXmk'
        )->get('https://api.themoviedb.org/3/movie/upcoming')
        ->json()['results'];

        

        return view('movie.index',[ 
            'popularMovie' => $popularMovie,
            'upcomingMovie' =>  $upcomingMovie
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $movie = Http::withToken('eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI1NGI1NDc4OTg2OWJkNjIyYWU2NjUyYjRkNmMxNmNhNSIsInN1YiI6IjYxNTUzMzQ2OWY1ZGZiMDA2MmY0YTk2YiIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.1V9sl8r97aiVAHdKpsd-E36Y1PdzN4avfY0jGA7kXmk'
        )->get('https://api.themoviedb.org/3/movie/movie/ ' . $id)
        ->json();


        dump($movie);
        return ('movie.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
