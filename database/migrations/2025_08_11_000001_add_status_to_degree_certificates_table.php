<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('degree_certificates', function (Blueprint $table) {
            $table->tinyInteger('status')->default(0)->after('price');
        });
    }

    public function down(): void
    {
        Schema::table('degree_certificates', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}; 