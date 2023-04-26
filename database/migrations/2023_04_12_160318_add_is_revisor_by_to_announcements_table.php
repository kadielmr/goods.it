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
        Schema::table('announcements', function (Blueprint $table) {

            $table->unsignedBigInteger('is_revisor_by')->nullable();

            $table->foreign('is_revisor_by')->references('id')->on('users')->onDelete('SET NULL');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('announcements', function (Blueprint $table) {
         
            $table->dropForeign(['is_revisor_by']);
            $table->dropColumn(['is_revisor_by']);
            
        });
    }
};
