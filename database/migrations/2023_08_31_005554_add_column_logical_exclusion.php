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
        Schema::table('products', function (Blueprint $table) {
            $table->string('deleted_at')->after('updated_at');
        });

        Schema::table('rent', function (Blueprint $table) {
            $table->string('deleted_at')->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('deleted_at')->unique()->after('updated_at');
        });

        Schema::table('rent', function (Blueprint $table) {
            $table->string('deleted_at')->unique()->after('updated_at');
        });
    }
};
