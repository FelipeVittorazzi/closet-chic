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
        Schema::create('rent', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->integer('product_id');
            $table->date('initial_date');//->nullable();
            $table->date('final_date'); 
            $table->integer('user_id');
            $table->string('total_value');
            $table->string('description');
            $table->string('obs');
            $table->string('contract');
            $table->timestamps();

        });
    }
};
