<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameOnBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //カラム名の変更内容　変更する前のカラム名：後のカラム名
        Schema::table('books', function (Blueprint $table) {
            $table->renameColumn('item_name', 'item_problem');
            $table->renameColumn('item_number', 'item_coping');
            $table->renameColumn('item_amount', 'item_result');
            $table->renameColumn('published', 'added');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //変更後の内容　変更した後のカラム名：前のカラム名
        Schema::table('books', function (Blueprint $table) {
            $table->renameColumn('item_problem', 'item_name');
            $table->renameColumn('item_coping', 'item_number');
            $table->renameColumn('item_result', 'item_amount');
            $table->renameColumn('added', 'published');
    });
}
}
