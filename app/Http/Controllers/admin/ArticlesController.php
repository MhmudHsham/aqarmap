<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Validator;
use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticlesController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $rows = Article::with("category")->orderBy("id", "desc")->get();
        return view("admin.articles.index", compact("rows"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        // define id by zero to catch it in view
        // after catch it in view it will show in JS file that is create function
        $id = 0;
        $categories = Category::orderBy("id", "desc")->get();
        return view("admin.articles.form", compact("id", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:articles|max:255',
                    'content' => 'required',
                    'description' => 'required',
                    'keywords' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('admin/articles')
                            ->withErrors($validator)
                            ->withInput();
        }
        $article = new Article;
        $article->category_id = $request->category_id;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->description = $request->description;
        $article->keywords = $request->keywords;
        $article->save();
        return redirect('admin/articles')->with(
                        'info', ''
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $data = Article::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $categories = Category::orderBy("id", "desc")->get();
        return view("admin.articles.form", compact("id", "categories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $article = Article::find($id);
        $article->category_id = $request->category_id;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->description = $request->description;
        $article->keywords = $request->keywords;
        $article->save();
        return redirect('admin/articles')->with(
                        'info', ''
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $article = Article::find($id);
        $article->delete();
    }

}
