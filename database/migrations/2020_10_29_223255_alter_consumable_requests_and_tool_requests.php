<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterConsumableRequestsAndToolRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tool_requests', function(Blueprint $table) {
            $table->dropColumn('departments_id');
        });
        Schema::table('consumable_requests', function(Blueprint $table) {
            $table->dropColumn('departments_id');
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
