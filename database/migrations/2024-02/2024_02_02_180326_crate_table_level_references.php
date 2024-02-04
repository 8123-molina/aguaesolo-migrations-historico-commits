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
            -- Ivan Nack                02/02/2024  REV_0.0: Criação tabela level_references
            -- ===================================================================================================== 
            CREATE TABLE `level_references` (
            `id` int NOT NULL AUTO_INCREMENT,
            `key` varchar(64) NOT NULL DEFAULT (uuid()),
            `station_id` INT NOT NULL,
            `RN` INT NOT NULL,
            `quote` decimal(10,3) NULL DEFAULT NULL,
            `RN_altitude` decimal(10,3) NULL DEFAULT NULL,
            `stability` varchar(20) NULL DEFAULT NULL,
            `RN_description` varchar(50) NULL DEFAULT NULL,
            `deleted` tinyint(1) NOT NULL DEFAULT 0,
            `deleted_by` int DEFAULT NULL,
            `deleted_at` datetime DEFAULT NULL,
            `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
            `data_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            CONSTRAINT `fk_stations_level_references` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
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
