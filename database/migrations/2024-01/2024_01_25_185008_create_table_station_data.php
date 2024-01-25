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
-- Ivan Nack                25/01/2024  REV_0.0: Criação tabela station_data (estacao_dado)
-- ===================================================================================================== 
CREATE TABLE IF NOT EXISTS `station_data` (
  `station_id` int NOT NULL,
  `date` datetime NOT NULL,
  `level` decimal(10,2) DEFAULT NULL COMMENT 'Nível',
  `rain` decimal(10,2) DEFAULT NULL COMMENT 'Chuva',
  `flow` decimal(10,2) DEFAULT NULL COMMENT 'Vazão',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`station_id`,`date`) USING BTREE,
  KEY `fk_station_date_station_idx` (`station_id`),
  CONSTRAINT `fk_station_date_station` FOREIGN KEY (`station_id`) REFERENCES `station` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
SQL
                    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_station_data');
    }
};
