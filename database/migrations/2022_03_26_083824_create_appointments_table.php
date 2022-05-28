<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('doctor_id');
            $table->string('user_id')->nullable();
            $table->string('patinet_name')->nullable();
            $table->string('patinet_age')->nullable();
            $table->string('patinet_phone')->nullable();
            $table->string('patinet_email')->nullable();
            $table->string('patinet_condition')->nullable();
            $table->string('patinet_previous_test')->nullable();
            $table->string('appointment_id')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('payment_number')->nullable();
            $table->date('today')->nullable();
            $table->string('amount')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
