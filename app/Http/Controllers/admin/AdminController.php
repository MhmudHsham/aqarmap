<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        return view("admin.index");
    }

}
