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
        $table->string('person'); // 參與人
        $table->string('description'); // 描述
        $table->date('date'); // 日期
        $table->string('location'); // 地點
        $table->integer('amount'); // 金額
        $table->timestamps();
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
