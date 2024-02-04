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
        //crate_table_stations_monitorings
        DB::statement(
<<<SQL
        -- ===================================================================================================== 
        --  Autor                    Data        Resumo  
        -- ----------------------   ----------  -----------  
        -- Ivan Nack                04/02/2024  REV_0.0: Criação tabela stations_monitoring_types (Descrição dos Tipos monitoramentos da estação)
        -- ===================================================================================================== 
        CREATE TABLE `stations_monitoring_types` (
        `id` int NOT NULL AUTO_INCREMENT,
        `key` varchar(64) NOT NULL DEFAULT (uuid()),
        `station_id` INT NOT NULL,
        `type` enum('L','T','F','P','D','S','Q') NULL DEFAULT NULL COMMENT 'Tipo de monitoramento
            L: Limnimétrica
            T: Telemétrica
            F: Fluviométrica
            P: Pluviométrica
            D: Descarga líquida (mediçao de vazão em campo)
            S: Sedimentológica
            Q: Qualidade da água',
        `instalation_date` date NULL DEFAULT NULL COMMENT 'Data da instalação',
        `uninstalation_date` date NULL DEFAULT NULL COMMENT 'Data da desinstalação/Desativação',
        `obtaining_method` varchar(100) NULL DEFAULT NULL COMMENT 'Método de obtenção',
        `transmission_form` varchar(100) NULL DEFAULT NULL COMMENT 'Forma de transmissão',
        `latitude` float NULL DEFAULT NULL COMMENT 'Latitude',
        `longitude` float NULL DEFAULT NULL COMMENT 'Longitude',
        `altitude` float NULL DEFAULT NULL COMMENT 'Altitude',
        `deleted` tinyint(1) NOT NULL DEFAULT 0,
        `deleted_by` int NULL DEFAULT NULL,
        `deleted_at` datetime NULL DEFAULT NULL,
        `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
        `data_update` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
        PRIMARY KEY (`id`),
        CONSTRAINT `fk_stations_stations_monitoring_types` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`)
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
