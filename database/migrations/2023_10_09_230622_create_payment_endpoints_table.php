<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_endpoints', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("account_number");
            $table->string("method_name")->default("Airtel Money");
            $table->bigInteger("max_amount")->default("0");
            $table->string("ussd_template")->default("*501#");
            $table->string("accepted_currency")->default("usd");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_endpoints');
    }
};
