<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('article', [
            'articles' => Article::all()
        ]);
    }
    public function content(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }
    public function categories(){
        return view('categories', [
            'categories' => Category::all()
        ]);
    }
    public function category(Category $category){
        return view('category', [
            "category" => $category
        ]);
    }
}
