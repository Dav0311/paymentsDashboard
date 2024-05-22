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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('src_of_transaction');
            $table->integer('amount');
            $table->dateTime('date_of_payment');
            $table->string('full_name');
            $table->string('phone_no');
            $table->string('email')->unique();
            $table->string('currency');
            $table->string('transaction_ref');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
