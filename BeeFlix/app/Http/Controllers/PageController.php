<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Movie;
use App\Episode;
use App\Genre;
use App\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $movie = DB::table('movies')->get();
        // dump($movie);
        $drama = Movie::all()->where('genre_id',1)->take(4);
        $kids = Movie::all()->where('genre_id',2)->take(4);
        $tshow = Movie::all()->where('genre_id',3)->take(4);
        return view('home',['drama' => $drama, 'kids' => $kids, 'tshows' => $tshow]);
    }

    public function index1()
    {
        $drama = Movie::all()->where('genre_id',1)->take(4);
        return view('drama',['drama' => $drama]);
    }

    public function index2()
    {
        $kids = Movie::all()->where('genre_id',2)->take(4);
        return view('kids',['kids' => $kids,]);
    }

    public function index3()
    {
        $tshow = Movie::all()->where('genre_id',3)->take(4);
        return view('tv',['tshows' => $tshow]);
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
    public function show(Movie $movie)
    {
        $paginate = Episode::where('movie_id','=',$movie -> id)->paginate(3);
        return view('details', ['movie' => $movie,'paginate' => $paginate]);
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
