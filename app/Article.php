<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    public $table = "articles";

    public function category() {
        return $this->belongsTo("App\Category");
    }

}
