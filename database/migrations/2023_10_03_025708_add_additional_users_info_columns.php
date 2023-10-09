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
        
        Schema::table('users', function (Blueprint $table) {
            $table->date("echeance");
            $table->bigInteger("montant_souscrit");
            $table->string("addresse");
            $table->string("phone_1");
            $table->string("phone_2");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('echeance');
            $table->dropColumn('montant_souscrit');
            $table->dropColumn('addresse');
            $table->dropColumn('phone_1');
            $table->dropColumn('phone_2');
        });
    }
};
