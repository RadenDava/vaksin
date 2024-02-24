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
        Schema::create('societies', function (Blueprint $table) {
            $table->id();
            $table->char('id_card_number', 8);
            $table->string('password');
            $table->string('name');
            $table->date('birthday');
            $table->enum('gender', ['male', 'female']);
            $table->text('address');
            $table->unsignedBigInteger('regional_id');
            $table->text('login_tokens');
            $table->timestamps();

            $table->foreign( 'regional_id' )->references('id')->on('regionals')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('societies');
    }
};
