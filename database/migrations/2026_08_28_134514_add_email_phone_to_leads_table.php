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
        Schema::table('leads', function (Blueprint $table) {
            $table->string('email')->after('last_name');
            $table->string('phone', 50)->nullable()->after('email');
            $table->dropColumn('contact');
        });
    }

    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->string('contact')->after('last_name');
            $table->dropColumn(['email', 'phone']);
        });
    }
};
