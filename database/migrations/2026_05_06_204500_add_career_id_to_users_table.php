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
        if (! Schema::hasColumn('users', 'career_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->foreignId('career_id')
                    ->nullable()
                    ->after('password')
                    ->constrained('careers');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('users', 'career_id')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropForeign(['career_id']);
                $table->dropColumn('career_id');
            });
        }
    }
};
