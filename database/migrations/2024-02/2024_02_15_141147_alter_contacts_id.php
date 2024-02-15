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
    ALTER TABLE aguaesolo.clients MODIFY COLUMN contact_id int NULL DEFAULT NULL;
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
