<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Validator;
use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $rows = Category::orderBy("id", "desc")->get();
        return view("admin.categories.index", compact("rows"));
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
        return view("admin.categories.form", compact("id", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
                    'title' => 'required|unique:categories|max:255',
                    'description' => 'required',
                    'keywords' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('admin/categories')
                            ->withErrors($validator)
                            ->withInput();
        }
        $article = new Category;
        $article->title = $request->title;
        $article->description = $request->description;
        $article->keywords = $request->keywords;
        $article->save();
        return redirect('admin/categories')->with(
                        'info', 'Permission has been added to your Collaborator successfully'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $data = Category::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        return view("admin.categories.form", compact("id"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $article = Category::find($id);
        $article->title = $request->title;
        $article->description = $request->description;
        $article->keywords = $request->keywords;
        $article->save();
        return redirect('admin/categories')->with(
                        'info', 'Permission has been added to your Collaborator successfully'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $article = Category::find($id);
        $article->delete();
    }

}
