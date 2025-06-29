<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create("customLogo", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("src");
            $table->integer("width");
            $table->integer("height");
            $table->integer("padding");
            $table->integer("magrin");
            $table->string("border_radius");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists("cutomLogo");
    }
};
