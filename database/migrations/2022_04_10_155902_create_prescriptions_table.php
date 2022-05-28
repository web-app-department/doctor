<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->bigInteger('doctor_id')->nullable();
            $table->foreignId('appointment_id')->nullable();
            $table->text('type_of_exam')->nullable();
            $table->text('chife_complaint')->nullable();
            $table->text('history_type_of_exam')->nullable();
            $table->text('diagnosis_type_of_exam')->nullable();
            $table->text('investigation_type_of_exam')->nullable();
            $table->text('type_of_medicine')->nullable();
            $table->text('name_of_medicine')->nullable();
            $table->text('strenth_of_medicine')->nullable();
            $table->text('duration_of_medicine')->nullable();
            $table->text('does_of_medicine')->nullable();
            $table->text('suggestion_of_medicine')->nullable();
            $table->text('name')->nullable();
            $table->integer('age')->nullable();
            $table->text('come_after')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreign('appointments')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('prescriptions');
    }
}
