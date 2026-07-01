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
            $table->string('name')->after('role_id')->change();

            $table->string('last_name')->nullable()->after('name')->change();
            $table->string('country')->nullable()->after('last_name')->change();
            $table->string('c_companyname')->nullable()->after('country')->change();
            $table->string('c_address')->nullable()->after('c_companyname')->change();
            $table->string('c_state_country')->nullable()->after('c_address')->change();
            $table->string('c_postal_zip')->nullable()->after('c_state_country')->change();
            $table->string('c_phone')->nullable()->after('c_postal_zip')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
