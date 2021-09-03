<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePurchaseRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_purchase_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_purchase_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->tinyInteger('rating')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('service_purchase_ratings');
    }
}
