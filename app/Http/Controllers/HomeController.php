<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Comment;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $articles = Article::with("category")->orderBy("id", "desc")->get();
        $categories = Category::orderBy("id", "desc")->get();
        return view('front.index', compact("articles", "categories"));
    }

    public function filter($id) {
        $articles = Article::where("category_id", $id)->orderBy("id", "desc")->get();
        $render = view("front.article_render", compact("articles"))->render();
        echo $render;
        die();
    }

    public function article_details($id) {
        $details = Article::with("category")->find($id);
        $comments = Comment::where("article_id", $id)->orderBy("id", "desc")->get();
        return view("front.details", compact("details", "comments", 'id'));
    }

    public function comment() {
        $name = $_POST['name'];
        $content = $_POST['comment'];
        $comment = new Comment;
        $comment->name = $name;
        $comment->comment = $content;
        $comment->article_id = $_POST['article_id'];
        $comment->save();

        $comments = Comment::where("article_id", $_POST['article_id'])->orderBy("id", "desc")->get();
        return $comments;
    }

}
