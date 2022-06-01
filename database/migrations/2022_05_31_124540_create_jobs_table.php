<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug');
            $table->text('description');
            $table->date('expire_in')->nullable();
            $table->string('status');
            
            $table->foreignId('user_id')->constrained();
            $table->foreignId('job_category_id')->constrained();
            $table->unsignedBigInteger('salary_range_id');
            $table->foreign('salary_range_id')->references('id')->on('salary_ranges');
            $table->unsignedBigInteger('experience_duration_id');
            $table->foreign('experience_duration_id')->references('id')->on('expreience_durations');
            $table->unsignedBigInteger('experience_level_id');
            $table->foreign('experience_level_id')->references('id')->on('expreience_levels');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
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
        Schema::dropIfExists('jobs');
    }
}
