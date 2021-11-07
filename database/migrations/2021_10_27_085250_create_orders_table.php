<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('checkout_id');
            $table->unsignedBigInteger('service_id');
            $table->string('service_name')->nullable();
            $table->string('service_qty')->nullable();
            $table->string('subtotal')->nullable();
            $table->string('vat')->nullable();
            $table->string('total')->nullable();
            $table->enum('status',['confirmed','pending','deleted'])->default('pending');
            $table->timestamps();

            // $table->foreign('checkout_id')->references('id')->on('checkouts')->onDelete('cascade');
            // $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
