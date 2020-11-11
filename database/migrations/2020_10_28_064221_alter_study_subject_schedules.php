<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStudySubjectSchedules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('study_subject_schedules', function(Blueprint $table) {
            $table->integer('student_classes_id');
            $table->integer('study_subjects_id');
            $table->time('start_at');
            $table->time('end_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('study_subject_schedules', function(Blueprint $table) {

        });
    }
}
