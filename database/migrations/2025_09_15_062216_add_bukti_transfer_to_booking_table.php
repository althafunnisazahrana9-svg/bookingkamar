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
        Schema::table('booking', function (Blueprint $table) {
            $table->string('bukti_transfer')->nullable()->after('status');
        });
    }

    /**
     * Hapus kolom bukti_transfer kalau rollback.
     */
    public function down(): void
    {
        Schema::table('booking', function (Blueprint $table) {
            $table->dropColumn('bukti_transfer');
        });
    }
};
