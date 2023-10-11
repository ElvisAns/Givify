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
        Schema::create('users_contributions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade'); //note here contrained assume we have users table
            $table->unsignedBigInteger('montant');
            $table->boolean('confirmed')->default(false);
            $table->foreignId("payment_endpoint_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_contributions');
    }
};
