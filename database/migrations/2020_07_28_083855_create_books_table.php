<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('书名');
            $table->tinyInteger("sort")->default(0)->comment('排序');
            $table->tinyInteger("status")->default(0)->comment('状态 1正常 2屏蔽');
            $table->string('author',50)->comment('作者');
            $table->string('user', 50)->comment('添加用户');
            $table->smallInteger('clicks')->comment('点击量');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
