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
-- Ivan Nack                25/01/2024  REV_0.0: Criação tabela station (estacao)
-- ===================================================================================================== 
CREATE TABLE IF NOT EXISTS `station` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `key` varchar(64) DEFAULT (uuid()),
  `enterprise_id` int NOT NULL,
  `codigoANA` varchar(10) DEFAULT NULL,
  `codigoFLU` varchar(10) DEFAULT NULL,
  `codigoPLU` varchar(10) DEFAULT NULL,
  `endereco` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `coordenadas` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `frequencia` int DEFAULT NULL,
  `basin_id` int DEFAULT NULL,
  `data_extra` json DEFAULT NULL,
  `limite_discrepancia` decimal(10,2) DEFAULT NULL,
  `data_source_id` int DEFAULT NULL,
  `deleted` enum('Y','N') DEFAULT 'N',
  `deleted_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `data_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_station_empreendimentos1_idx` (`enterprise_id`),
  KEY `fk_station_data_source` (`data_source_id`),
  KEY `fk_station_basin` (`basin_id`),
  CONSTRAINT `fk_station_basin` FOREIGN KEY (`basin_id`) REFERENCES `basin` (`id`),
  CONSTRAINT `fk_station_enterprise` FOREIGN KEY (`enterprise_id`) REFERENCES `enterprise` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_station_data_source` FOREIGN KEY (`data_source_id`) REFERENCES `data_source` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
SQL
                    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_station');
    }
};
