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
             $table->string('country')->nullable()->after('role_id');
        $table->string('last_name')->nullable();
        $table->string('c_companyname')->nullable();
        $table->string('c_address')->nullable();
        $table->string('c_state_country')->nullable();
        $table->string('c_postal_zip')->nullable();
        $table->string('c_phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
              $table->dropColumn([
            
            'country',
            'last_name',
            'c_companyname',
            'c_address',
            'c_state_country',
            'c_postal_zip',
            'c_phone',
        ]);
        });
    }
};
