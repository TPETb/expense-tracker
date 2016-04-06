<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expenses', function($table){
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('tag')->references('id')->on('expense_tags')->onDelete('cascade');
            $table->foreign('currency')->references('id')->on('currencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expenses', function($table){
            $table->dropForeign('expenses_user_foreign');
            $table->dropForeign('expenses_tag_foreign');
            $table->dropForeign('expenses_currency_foreign');
        });
    }
}
