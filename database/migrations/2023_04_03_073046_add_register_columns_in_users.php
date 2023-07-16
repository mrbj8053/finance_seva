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
            $table->string('parent_id',50);
            $table->string('position',10);
            $table->string('sponsor_id',50);
            $table->string('own_id',50);
            $table->string('role',10)->default('user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('parent_id');
            $table->dropColumn('position');
            $table->dropColumn('sponsor_id');
            $table->dropColumn('own_id');
            $table->dropColumn('role');
        });
    }
};
