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
        Schema::table('roles', function (Blueprint $table) {
            $table->boolean('deleted')->default(false)->change();
        });

        Schema::table('contacts', function (Blueprint $table) {
            $table->boolean('deleted')->default(false)->change();
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->boolean('deleted')->default(false)->change();
        });
        Schema::table('basins', function (Blueprint $table) {
            $table->boolean('deleted')->default(false)->change();
        });
        Schema::table('data_sources', function (Blueprint $table) {
            $table->boolean('deleted')->default(false)->change();
        });
        Schema::table('enterprises', function (Blueprint $table) {
            $table->boolean('deleted')->default(false)->change();
        });
        Schema::table('permitions', function (Blueprint $table) {
            $table->boolean('deleted')->default(false)->change();
        });
        Schema::table('stations', function (Blueprint $table) {
            $table->boolean('deleted')->default(false)->change();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('deleted')->default(false)->change();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('roles', function (Blueprint $table) {
            $table->dropColumn('deleted');
        });
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('deleted');
        });
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('deleted');
        });
        Schema::table('basins', function (Blueprint $table) {
            $table->dropColumn('deleted');
        });
        Schema::table('data_sources', function (Blueprint $table) {
            $table->dropColumn('deleted');
        });
        Schema::table('enterprises', function (Blueprint $table) {
            $table->dropColumn('deleted');
        });
        Schema::table('permitions', function (Blueprint $table) {
            $table->dropColumn('deleted');
        });
        Schema::table('stations', function (Blueprint $table) {
            $table->dropColumn('deleted');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('deleted');
        });
    }
};
