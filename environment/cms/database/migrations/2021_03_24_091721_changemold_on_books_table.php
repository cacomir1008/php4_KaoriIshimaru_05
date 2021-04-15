<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangemoldOnBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //型の変更
        Schema::table('books', function (Blueprint $table) {
            $table->text('item_problem')->change();
            $table->text('item_coping')->change();
            $table->text('item_result')->change();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //変更前の内容　変更前の型名（カラム名）
            Schema::table('books', function (Blueprint $table) {
            $table->string('item_problem')->change();
            $table->integer('item_coping')->change();
            $table->integer('item_result')->change();
            });
    }
}
