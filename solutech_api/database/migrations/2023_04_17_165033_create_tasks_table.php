<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('contact_firstname', 100);
            $table->string('contact_lastname', 100);
            $table->string('contact_email', 100);
            $table->string('taskAssigned')->nullable();
            $table->time('acquired_on')->nullable();
            $table->text('user_status', 255)->nullable();
            $table->text('description', 255)->nullable();
            $table->time('due_date')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
