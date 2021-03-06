<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    public $table = "categories";

    public function articles() {
        return $this->hasMany("App\Article", "category_id");
    }

}
