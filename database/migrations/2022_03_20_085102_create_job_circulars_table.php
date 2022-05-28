<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobCircularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_circulars', function (Blueprint $table) {
            $table->increments('id');
            $table->char('title')->nullable();
            $table->char('company_name')->nullable();
            $table->text('departmant')->nullable();
            $table->text('job_resposibilities')->nullable();
            $table->text('education_requirments')->nullable();
            $table->text('additaional_requirments')->nullable();
            $table->text('vacancy')->nullable();
            $table->text('salary')->nullable();
            $table->text('apply_process')->nullable();
            $table->char('type')->nullable();
            $table->text('des')->nullable();
            $table->text('short_des')->nullable();
            $table->date('deadline')->nullable();
            $table->text('social')->nullable();
            $table->text('location')->nullable();
            $table->char('workplace')->nullable();
            $table->text('tags')->nullable();
            $table->tinyInteger('status')->nullable();
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
        Schema::dropIfExists('job_circulars');
    }
}
