<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineExamsTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_exams_tables', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('admin_id');
            $table->text('online_exam_title');
            $table->dateTime('online_exam_datetime', $precision = 0);
            $table->string('online_exam_duration', 30);
            $table->integer('total_question');
            $table->string('marks_per_right_answer', 30);
            $table->string('marks_per_wrong_answer', 30);
            $table->enum('online_exam_status', ['Pending', 'Created', 'Started', 'Completed']);
            $table->string('online_exam_code', 100);
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
        Schema::dropIfExists('online_exams_tables');
    }
}
