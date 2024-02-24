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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('society_id');
            $table->unsignedBigInteger('doctor_id');
            $table->enum('status', ['accepted', 'declined', 'pending']);
            $table->text('disease_history');
            $table->text('current_symtoms');
            $table->text('doctor_notes');
            $table->timestamps();

            $table->foreign( 'society_id' )->references('id')->on('societies')->onDelete('cascade');
            $table->foreign( 'doctor_id' )->references('id')->on('medicals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultations');
    }
};
