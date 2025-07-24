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
        Schema::create('petty_cashes', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('amount', 10, 2);
            $table->string('description')->nullable();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->timestamps();

            // 外鍵約束
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petty_cashes'); // ✅ 正確對應表名
    }
};
