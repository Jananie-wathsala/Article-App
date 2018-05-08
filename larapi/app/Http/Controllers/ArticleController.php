<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
   public function index(){
       $data=Article::all()->makeHidden(['body','image']);
       return response($data)->header('Access-Control-Allow-Origin', '*')
           ->header('Access-Control-Allow-Credentials', 'true')
           ->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
           ->header('Access-Control-Allow-Headers', 'DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');
       //return Article::all();
   }

   public function show(Article $article){
       $data=$article->makeVisible(['body','image']);
       return response($data)->header('Access-Control-Allow-Origin', '*')
           ->header('Access-Control-Allow-Credentials', 'true')
           ->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS')
           ->header('Access-Control-Allow-Headers', 'DNT,X-CustomHeader,Keep-Alive,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type');

   }

   public function store(Request $request){
       $article= Article::create($request->all());
       return response()->json($article,201);
   }

   public function update(Request $request,Article $article){

       $article->update($request->all());
       return response()->json($article,200);

   }
   public function delete(Request $request,Article $article){
       $article->delete();
       return response()->json(null,204);
   }
}
