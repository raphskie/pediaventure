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
        Schema::table('personal_information_admin', function (Blueprint $table) {
            if (!Schema::hasColumn('personal_information_admin', 'created_by')) {
                $table->string('created_by')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personal_information_admin', function (Blueprint $table) {
            $table->dropColumn('created_by');
        });
    }
};
