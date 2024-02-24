<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaccinations', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('dose');
            $table->date('date');
            $table->unsignedBigInteger('society_id');
            $table->unsignedBigInteger('spot_id');
            $table->unsignedBigInteger('vaccine_id');
            $table->unsignedBigInteger('doctor_id');
            $table->unsignedBigInteger('officer_id');
            $table->timestamps();

            $table->foreign( 'society_id' )->references('id')->on('societies')->onDelete('cascade');
            $table->foreign( 'spot_id' )->references('id')->on('spots')->onDelete('cascade');
            $table->foreign( 'vaccine_id' )->references('id')->on('vaccines')->onDelete('cascade');
            $table->foreign( 'doctor_id' )->references('id')->on('medicals')->onDelete('cascade');
            $table->foreign( 'officer_id' )->references('id')->on('medicals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vaccinations');
    }
};
