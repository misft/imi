<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolLoaningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tool_loanings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('students_id');
            $table->integer('tools_id');
            $table->integer('rooms_id');
            $table->integer('study_subjects_id');
            $table->string('start_at');
            $table->string('end_at');
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
        Schema::dropIfExists('tool_loanings');
    }
}
