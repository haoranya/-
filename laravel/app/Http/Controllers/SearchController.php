<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Article;

class SearchController extends Controller
{
    function search_page(){

        $info = 'null';

        return view('search',['info'=>$info]);

    }

    function search(){

        $word = $_GET['word'];

        $info = Article::search($word)->get()->toArray();

        // dd($info);

        return view('search',['info'=>$info]);

    }
}
