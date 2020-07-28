<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digests', function (Blueprint $table) {
            $table->id();
            $table->integer("book_id")->default(0)->comment('所属书目ID');
            $table->text('content')->comment('书摘内容');
            $table->tinyInteger("status")->comment('状态 1正常 2屏蔽');
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
        Schema::dropIfExists('digests');
    }
}
