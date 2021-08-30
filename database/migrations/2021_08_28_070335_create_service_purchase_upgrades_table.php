<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePurchaseUpgradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_purchase_upgrades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_purchase_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('service_upgrade_id')->nullable()->constrained()->onDelete('set null')->onUpdate('set null');
            $table->float('price');
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
        Schema::dropIfExists('service_purchase_upgrades');
    }
}
