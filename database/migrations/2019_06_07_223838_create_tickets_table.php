<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('descryption');
            $table->string('contact');
            $table->string('contact_name');
            $table->unsignedInteger('create_for');
            $table->unsignedInteger('checked_for')->nullable();
            $table->unsignedInteger('tech_id');
            $table->date('create_date');
            $table->date('expire_date')->nullable();
            $table->unsignedInteger('status');
            $table->unsignedInteger('client_id');
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('CASCADE');
            $table->foreign('create_for')->references('id')->on('users');
            $table->foreign('checked_for')->references('id')->on('users');
            $table->foreign('tech_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('ticket');
    }
}
