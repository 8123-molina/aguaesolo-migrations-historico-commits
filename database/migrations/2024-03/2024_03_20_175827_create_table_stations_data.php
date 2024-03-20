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
        -- Ivan Nack                20/03/2024  Criar tabela stations_data
        -- ===================================================================================================== 
        CREATE TABLE `stations_data` (
            `station_id` INT NOT NULL,
            `sensors_id` INT NOT NULL,
            `equipament_data_id` INT NULL DEFAULT NULL COMMENT 'ID dados dos equipamentos',
            `observer_id` INT NULL DEFAULT NULL COMMENT 'Id observador/leiturista',
            `date` DATETIME NOT NULL COMMENT 'Data do dado',
            `data` DECIMAL(20,4) NULL DEFAULT NULL COMMENT 'Dado',
            `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `updated_at` DATETIME NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`station_id`, `sensors_id`, `date`) USING BTREE,
            INDEX `fk_station_date_station_idx` (`station_id`) USING BTREE,
            INDEX `fk_stations_data_sensors_idx` (`sensors_id`) USING BTREE,
            CONSTRAINT `fk_stations_data_station` FOREIGN KEY (`station_id`) REFERENCES `stations` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION,
            CONSTRAINT `fk_stations_data_sensors` FOREIGN KEY (`sensors_id`) REFERENCES `sensors` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION
        ) ENGINE=InnoDB COLLATE='utf8mb4_0900_ai_ci';
SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_stations_data');
    }
};
