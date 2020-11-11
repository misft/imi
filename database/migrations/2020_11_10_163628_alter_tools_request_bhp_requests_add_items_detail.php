<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterToolsRequestBhpRequestsAddItemsDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tool_requests', function(Blueprint $table) {
             $table->string('url');
             $table->string('price');
        });
        Schema::table('consumable_requests', function(Blueprint $table) {
            $table->string('url');
            $table->string('price');
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
