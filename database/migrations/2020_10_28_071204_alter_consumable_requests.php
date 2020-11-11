<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterConsumableRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consumable_requests', function(Blueprint $table) {
            $table->string('is_verified_by_hol')->default('PENDING')->change();
            $table->string('is_verified_by_hosp')->default('PENDING')->change();
            $table->string('is_verified_by_hod')->default('PENDING')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
