<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsumableLoaningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumable_loanings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("students_id");
            $table->integer("consumables_id");
            $table->integer("rooms_id");
            $table->integer("study_subjects_id");
            $table->date("loaning_date");
            $table->time("start_at");
            $table->time("end_at");
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
        Schema::dropIfExists('consumable_loanings');
    }
}
