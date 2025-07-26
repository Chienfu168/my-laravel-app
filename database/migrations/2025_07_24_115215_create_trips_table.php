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
    Schema::create('trips', function (Blueprint $table) {
        $table->id();
        $table->string('person'); // 👈 新增這一行
        $table->text('description')->nullable();
        $table->date('date')->nullable();
        $table->string('location')->nullable();
        $table->decimal('amount', 10, 2)->default(0);
        $table->timestamps(); // 👈 Laravel 會自動建立 created_at 和 updated_at 欄位

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
