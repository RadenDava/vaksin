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
        Schema::create('spot_vaccines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('spot_id');
            $table->unsignedBigInteger('vaccine_id');
            $table->timestamps();

            $table->foreign( 'spot_id' )->references('id')->on('spots')->onDelete('cascade');
            $table->foreign( 'vaccine_id' )->references('id')->on('vaccines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spot_vaccines');
    }
};
