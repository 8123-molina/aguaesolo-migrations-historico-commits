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
        -- Ivan Nack                30/01/2024  REV_0.0: Adcionar colunas deleted, deteled_by, deleted_at na tabela users (usuários)
        -- ===================================================================================================== 
        ALTER TABLE `users` 
        ADD COLUMN `deleted` enum('Y','N') DEFAULT 'N' AFTER `token`,
        ADD COLUMN `deleted_by` int DEFAULT NULL  AFTER `deleted`,
        ADD COLUMN `deleted_at` datetime DEFAULT NULL AFTER `deleted_by`
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
