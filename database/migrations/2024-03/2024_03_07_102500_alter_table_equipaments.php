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
ALTER TABLE `equipaments`
	ADD COLUMN `serial_number` VARCHAR(50) NULL DEFAULT NULL AFTER `model`,
	ADD UNIQUE INDEX `serial_number_unique` (`serial_number`);
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
