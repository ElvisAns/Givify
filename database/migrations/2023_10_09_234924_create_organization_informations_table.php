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
        Schema::create('organization_informations', function (Blueprint $table) {
            $table->uuid("organisation_id");
            $table->timestamps();
            $table->string("organisation_name");
            $table->string("logo")->default("https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png");
            $table->string("short description");
            $table->json("other_informations"); //prefered color scheme
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organization_informations');
    }
};
