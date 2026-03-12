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
        Schema::table('binshops_blog_posts', function (Blueprint $table) {
            $table->unsignedBigInteger('language_id')->nullable()->after('posted_at');
            $table->unsignedBigInteger('parent_id')->nullable()->after('language_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('binshops_blog_posts', function (Blueprint $table) {
            $table->dropColumn('language_id');
            $table->dropColumn('parent_id');
        });
    }
};
