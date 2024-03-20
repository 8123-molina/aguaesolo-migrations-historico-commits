<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
        -- Ivan Nack                20/03/2024  Criar tabela sensors
        -- ===================================================================================================== 
        CREATE TABLE IF NOT EXISTS `sensors` (
            `id` int NOT NULL AUTO_INCREMENT,
            `key` varchar(64) DEFAULT (uuid()),
            `name` varchar(20) NOT NULL,
            `abreviation` varchar(5) NULL DEFAULT NULL,
            `description` varchar(64) NULL DEFAULT NULL,
            `measure_unit` varchar(6) NULL DEFAULT NULL,
            `deleted` TINYINT(1) NOT NULL DEFAULT '0',
            `deleted_by` INT NULL DEFAULT NULL,
            `deleted_at` DATETIME NULL DEFAULT NULL,
            `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `updated_at` DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_sensors');
    }
};
