<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->nullable();
            $table->string('name');
            $table->string('name_bn');
            $table->string('chember');
            $table->string('chember_bn');
            $table->string('experience')->nullable();
            $table->string('experience_bn')->nullable();
            $table->string('educational_qualification')->nullable();
            $table->string('educational_qualification_bn')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('designation')->nullable();
            $table->string('designation_bn')->nullable();
            $table->string('specialist')->nullable();
            $table->string('specialist_bn')->nullable();
            $table->string('hospital_name')->nullable();
            $table->string('hospital_name_bn')->nullable();
            $table->string('old_consultation_fee')->nullable();
            $table->string('consultation_fee')->nullable();
            $table->string('available')->nullable();
            $table->text('description')->nullable();
            $table->text('description_bn')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
