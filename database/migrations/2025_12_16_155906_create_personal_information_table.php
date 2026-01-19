<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_create_personal_information_table.php
public function up()
{
    Schema::create('personal_information_admin', function (Blueprint $table) {
        $table->id();
        $table->string('lname', 50);
        $table->string('fname', 50);
        $table->string('mname', 50)->nullable();
        $table->integer('age');
        $table->string('sex', 10);
        $table->string('address', 255)->nullable(false);
        $table->string('guardian_name', 255)->nullable(false);
        $table->string('grade_and_section', 50)->nullable(false);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information_admin');
    }
};
