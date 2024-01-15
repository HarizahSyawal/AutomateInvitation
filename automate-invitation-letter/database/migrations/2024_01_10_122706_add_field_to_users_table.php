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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nik')->after('email')->default('73710210201210');
            $table->string('no_passport')->after('email')->nullable();
            $table->string('jenis_kelamin')->after('email')->nullable();
            $table->longText('alamat')->after('email')->nullable();
            $table->string('tahapan')->after('email')->nullable();
            $table->bigInteger('method_id')->after('email')->nullable();
            $table->longText('desa')->after('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('nik');
            $table->dropColumn('no_passport'); 
            $table->dropColumn('jenis_kelamin');
            $table->dropColumn('alamat');
            $table->dropColumn('tahapan');
            $table->dropColumn('method_id');
            $table->dropColumn('desa');
        });
    }
};
