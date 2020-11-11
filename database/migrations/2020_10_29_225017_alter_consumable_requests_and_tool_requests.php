<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterConsumableRequestsAndToolRequestsModifyColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tool_requests', function(Blueprint $table) {
            $table->dropColumn('users_id');
            $table->string('filling_name');
        });
        Schema::table('consumable_requests', function(Blueprint $table) {
            $table->dropColumn('users_id');
            $table->string('filling_name');
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
