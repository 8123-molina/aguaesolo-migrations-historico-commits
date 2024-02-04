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
        -- ===================================================================================================== 
        --  Autor                    Data        Resumo  
        -- ----------------------   ----------  -----------  
        -- Ivan Nack                30/01/2024  REV_0.0: Adcionar colunas ANA_code
        -- ===================================================================================================== 
        ALTER TABLE `enterprises` 
            CHANGE adrress address text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL,
            ADD COLUMN `ANA_code` INT NULL DEFAULT NULL AFTER `address`

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
