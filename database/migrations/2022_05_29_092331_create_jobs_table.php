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
            $table->string('feature_title');
            $table->string('feature_description');
            $table->date('expire_in');
            $table->text('additional_inoformation');
            $table->string('salary');
            $table->string('roles');
            $table->string('company_name');
            $table->string('status');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('job_categories')->onDelete('cascade');
            $table->unsignedBigInteger('tags');
            $table->foreign('tags')->references('id')->on('tags')->onDelete('cascade');
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
