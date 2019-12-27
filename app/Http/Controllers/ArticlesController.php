<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Tag;


class ArticlesController extends Controller
{
    public function index()
    {
        // select * from articles where user_id=2
        //using auth() helper function
        //where the user_id is equal to the auth_id
        $articles = Article::where('user_id',auth()->id())->get();
     return view('articles.index',['articles'=>$articles]);
    }


    public function show(Article $article)
    {
        //if article user_id is not equal to the auth_id
        // then abort with 403
        if($article->user_id !== auth()->id()){
            abort(403);

            //abort_unless(auth()->user()->owns($article),483);
            //this->authorize('view',$article);
            //We can also use laravel gate which 
            //acts as big wall to enter the application
            //if(\Gate::denies('update',$project))
        }

     return view('articles.show',['article'=>$article]);
    }

    public function create()
    {
        return view('articles.create',[
            'tags'=>Tag::all()
        ]);

    }

    
    public function store()
    {
        $validatedAttributes=request()->validate([
            'title'=>'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]);
        //the user_id column must be the auth_id
        Article::create($validatedAttributes *['user_id'=>auth()->id()]);
       return redirect('/articles');
    }

    public function edit(Article $article)
    {
     
        return view('articles.edit',['article'=>$article]);
    }

    
    public function update(Article $article)
    {
        $validatedAttributes=request()->validate([
            'title'=>'required',
            'excerpt'=>'required',
            'body'=>'required'
        ]);
        Article::update($validatedAttributes);

        return redirect('/articles');
    }

}



