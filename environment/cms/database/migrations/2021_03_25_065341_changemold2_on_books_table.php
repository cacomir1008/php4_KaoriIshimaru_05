<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Changemold2OnBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //addedの型をdatetime→dateに変更
        Schema::table('books', function (Blueprint $table) {
            $table->date('added')->change();
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
            //下記を追記する
            $table->datetime('added')->change();
        });
    }
}
