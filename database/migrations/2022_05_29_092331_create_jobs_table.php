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
            
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('description');
            $table->date('expire_in');
            $table->string('salary_range');
            $table->string('worker_roles');
            $table->string('status');
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('job_category_id');
            $table->foreign('job_category_id')->references('id')->on('job_categories')->onDelete('cascade');
            $table->unsignedBigInteger('required_experience_id');
            $table->foreign('required_experience_id')->references('id')->on('required_expreiences')->onDelete('cascade');
            $table->unsignedBigInteger('experience_level_id');
            $table->foreign('experience_level_id')->references('id')->on('expreience_levels')->onDelete('cascade');
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
           
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
