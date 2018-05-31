<?php

namespace App\Http\Controllers\portal;

use Illuminate\Http\Request;
use App\User;
use App\Post;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $nome = "Fulano";
        // return view('home')->with('nome', $nome);
        // return view('home', [
        //     'nome' => $nome,
        //     'idade' => $idade
        // ]);

        // $users = App\User::all();

        //QUERY BUILDER
        // $users = \DB::table('users')->where('id', '>', 28)->orderBy('name')->get();
        // return $users;
        
        // return view('home', compact('nome'));

        // dd($_ENV['DB_CONNECTION']); //ñ funcionou :(
        // dd(getenv()); //Funcionou! :D

        // $posts = Post->greaterThan(12);
        // $posts = Post::greaterThan(12); //Chamando método estático
        // $posts = (new Post)->greaterThan(12); //Instanciando e chamando

        // return $posts;
        // $posts = Post::all();

        // $user = new User;
        // dd($user->find(35)->posts->all());

        return view('home');
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
        //
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
