<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLipaNaMpesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lipa_na_mpesa', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->integer('result_code');
            $table->string('result_desc');
            $table->string('merchant_request_id');
            $table->string('checkout_request_id');
            $table->float('amount');
            $table->string('mpesa_receipt_number')->unique();
            $table->bigInteger('transaction_date');
            $table->string('phone_number');
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
        Schema::dropIfExists('lipa_na_mpesa');
    }
}
