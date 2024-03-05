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
        ALTER TABLE aguaesolo.permitions 
            ADD `route` varchar(100) DEFAULT NULL NULL AFTER `description`,
            ADD `method` varchar(50) DEFAULT NULL NULL AFTER `route`
        
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
