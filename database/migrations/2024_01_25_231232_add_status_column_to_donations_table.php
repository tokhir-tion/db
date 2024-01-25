<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            $table->boolean('is_accepted')->after('amount')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('donations', function (Blueprint $table) {
            //
        });
    }
};
