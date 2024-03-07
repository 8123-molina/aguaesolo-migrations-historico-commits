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
        DB::statement(
<<<SQL
ALTER TABLE `equipaments_types`
	CHANGE COLUMN `name` `name` VARCHAR(50) NOT NULL DEFAULT '' AFTER `key`;
SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
