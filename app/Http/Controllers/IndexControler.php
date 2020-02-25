<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class IndexControler extends Controller
{
    
    public function index(){
        $hw='Hello world!';
        $ms='This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';
        $articles=Article::select('title', 'description', 'img','id')->get();;
        return view('index')->with(['hw'=>$hw, 'ms'=>$ms, 'articles'=>$articles ]);
        
    }
    public function p1(){
        return view('p1');
    }
    public function show($id){
        $article =Article::select(['id','title','text'])->where('id',$id)->first();
        return view('article-content')->with(['ms'=>$this->ms,
                                                'hw'=>$this->hw,
                                                    'article'=>$article]);
    }
    protected $ms;
    protected $hw;
    public function __construct(){
        $this->hw='Hello';
        $this->ms='This is a template';

        
    }
    public function add(){
        return view('add-content')->with(['hw'=>$this->hw, 'ms'=>$this->ms]);

}
public function store(Request $request){
    $this->validate($request, ['title'=>'required | max:200',
                                'description'=>'required | max:200',
                                'text'=>'required']);
    $data = $request->all();
    $article = new Article;
    $article -> fill($data);
    $article -> save();

    return redirect('/');
}
}
