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
        Schema::table('companies', function (Blueprint $table) {
            $table->integer('level_income_levels')->default(0);
            $table->boolean('adhar_front_image')->default(0);
            $table->boolean('adhar_back_image')->default(0);
            $table->boolean('pan_image')->default(0);
            $table->boolean('passbook_image')->default(0);
            $table->boolean('cancel_cheque_image')->default(0);
            $table->boolean('bank_name')->default(0);
            $table->boolean('account_holder_name')->default(0);
            $table->boolean('ifsc_code')->default(0);
            $table->boolean('account_number')->default(0);
            $table->integer('withdraw_minimum')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn('level_income_levels');
            $table->dropColumn('adhar_front_image');
            $table->dropColumn('adhar_back_image');
            $table->dropColumn('pan_image');
            $table->dropColumn('passbook_image');
            $table->dropColumn('cancel_cheque_image');
            $table->dropColumn('bank_name');
            $table->dropColumn('account_holder_name');
            $table->dropColumn('ifsc_code');
            $table->dropColumn('account_number');
            $table->dropColumn('withdraw_minimum');
        });
    }
};
