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
            // Add Firebase OAuth columns if they don't exist
            if (!Schema::hasColumn('personal_information_admin', 'firebase_uid')) {
                $table->string('firebase_uid')->nullable()->unique()->after('id');
            }

            if (!Schema::hasColumn('personal_information_admin', 'email')) {
                $table->string('email')->nullable()->unique()->after('firebase_uid');
            }

            if (!Schema::hasColumn('personal_information_admin', 'name')) {
                $table->string('name')->nullable()->after('email');
            }

            if (!Schema::hasColumn('personal_information_admin', 'profile_picture')) {
                $table->text('profile_picture')->nullable()->after('name');
            }

            if (!Schema::hasColumn('personal_information_admin', 'is_firebase_user')) {
                $table->boolean('is_firebase_user')->default(false)->after('profile_picture');
            }

            if (!Schema::hasColumn('personal_information_admin', 'last_login_at')) {
                $table->timestamp('last_login_at')->nullable()->after('is_firebase_user');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personal_information_admin', function (Blueprint $table) {
            $table->dropUnique(['firebase_uid']);
            $table->dropUnique(['email']);
            $table->dropColumn([
                'firebase_uid',
                'email',
                'name',
                'profile_picture',
                'is_firebase_user',
                'last_login_at',
            ]);
        });
    }
};
