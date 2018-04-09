<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string("title");
            $table->text("content");
            $table->integer('category_id')->unsigned();
            $table->text("keywords");
            $table->text("description");
            $table->timestamps();
        });
        Schema::table('articles', function($table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('articles');
    }

}
