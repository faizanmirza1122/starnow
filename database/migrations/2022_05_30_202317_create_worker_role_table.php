<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkerRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_worker_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('worker_id');
            $table->unsignedBigInteger('worker_role_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *j
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worker_role');
    }
}
