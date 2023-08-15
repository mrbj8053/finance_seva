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
        Schema::create('rewards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('business')->default(0);
            $table->float('business_total')->default(0);
            $table->boolean('is_cash')->default(0);
            $table->integer('rank')->default(0);
            $table->integer('multiplier');
            $table->string('reward_detail');
            $table->string('business_detail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rewards');
    }
};
