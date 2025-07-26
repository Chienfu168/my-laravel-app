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
    Schema::create('accounts', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('account_number')->nullable();
        $table->string('bank')->nullable();
        $table->decimal('balance', 12, 2)->nullable();
        $table->text('note')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
