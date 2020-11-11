<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterToolLoaningsAddDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("tool_loanings", function (Blueprint $table) {
            $table->dropColumn("start_at");
            $table->dropColumn("end_at");
        });

        Schema::table("tool_loanings", function (Blueprint $table) {
            $table->date('loaning_date');
            $table->time("start_at");
            $table->time("end_at");
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
