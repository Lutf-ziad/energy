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
        Schema::create('mangment_tems', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('jop');
            $table->text('picture')->nullable();
            $table->boolean('active')->default(1);
             $table->timestamps();
             $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mangment_tems');
    }
};
