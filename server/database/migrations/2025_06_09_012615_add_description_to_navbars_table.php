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
        Schema::table('pageCategories', function (Blueprint $table) {
            //
            $table->string('logo',255)->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pageCategories', function (Blueprint $table) {
            //
            $table->dropColumn('logo');
        });
    }
};
