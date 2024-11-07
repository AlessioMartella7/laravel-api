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
        Schema::create('technology_type', function (Blueprint $table) {
            $table->foreignId('technology_id')->constrained();
            $table->foreignId('type_id')->constrained();
            $table->primary(['technology_id','type_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technology_type');
    }
};
