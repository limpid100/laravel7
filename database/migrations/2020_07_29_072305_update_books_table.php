<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('books', function (Blueprint $table) {
            $table->string('name', 255)->default('')->comment('书名')->change();
            $table->integer("sort")->default(0)->comment('排序')->change();
            $table->integer("status")->default(0)->comment('状态 1正常 2屏蔽')->change();
            $table->string('author',50)->default('')->comment('作者')->change();
            $table->string('user', 50)->default('')->comment('添加用户')->change();
            $table->integer('clicks')->default(0)->comment('点击量')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
