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
        -- Ivan Nack                02/02/2024  REV_0.0: Criação tabela measurements_liquid_solid (Seção de medição líquida e sólida)
        -- ===================================================================================================== 
        CREATE TABLE `measurements_liquid_solid` (
        `id` int NOT NULL AUTO_INCREMENT,
        `key` varchar(64) NOT NULL DEFAULT (uuid()),
        `station_id` INT NOT NULL,
        `rulers_distance` decimal(10,2) NULL DEFAULT NULL COMMENT 'Distancia da seção de réguas',
        `PI_PF_distance` decimal(10,3) NULL DEFAULT NULL COMMENT 'Distância PI/PF',
        `localization` varchar(50) NULL DEFAULT NULL COMMENT 'Localização',
        `crossing_type` varchar(50) NULL DEFAULT NULL COMMENT 'Tipo de travessia',
        `riverbed_nature` decimal(10,3) NULL DEFAULT NULL COMMENT 'Natureza do leiro',
        `measurement_process` decimal(10,3) NULL DEFAULT NULL COMMENT 'Processo de medição',
        `deleted` tinyint(1) NOT NULL DEFAULT 0,
        `deleted_by` int NULL DEFAULT NULL,
        `deleted_at` datetime NULL DEFAULT NULL,
        `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `data_update` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`),
        CONSTRAINT `fk_stations_measurements_liquid_solid` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`)
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
