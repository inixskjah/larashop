<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductFeedbackRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_feedback_rate', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_feedback_id');
            $table->unsignedBigInteger('user_id');
            $table->smallInteger('value');
            $table->timestamps();
        });

        Schema::table('product_feedback_rate', function (Blueprint $table) {
            $table->foreign('product_feedback_id')->references('id')->on('product_feedback')->cascadeOnDelete();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_feedback_rate');
    }
}
