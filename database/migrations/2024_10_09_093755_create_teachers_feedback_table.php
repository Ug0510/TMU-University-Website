<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_feedback', function (Blueprint $table) {
            $table->id();
            $table->string('faculty_name');
            $table->string('employee_code');
            $table->string('designation');
            $table->integer('cd_id')->constrained('cd_name', 'id'); // Assuming 'colleges' table exists
            $table->string('academic_year');
            $table->integer('overall_rating');
            $table->text('topics_beyond_syllabus');
            $table->text('topics_to_delete');
            $table->text('suggestions');
            // Questions Feedback (q1 to q9)
            $table->enum('q1', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q2', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q3', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q4', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q5', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q6', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q7', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q8', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            $table->enum('q9', ['Strongly Disagree', 'Disagree', 'Neutral', 'Agree', 'Strongly Agree']);
            
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
        Schema::dropIfExists('teachers_feedback');
    }
};
