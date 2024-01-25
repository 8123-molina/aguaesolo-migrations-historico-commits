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
-- Ivan Nack                25/01/2024  REV_0.0: Criação tabela data_source (fonte_dados)
-- ===================================================================================================== 
CREATE TABLE IF NOT EXISTS `data_source` (
  `id` int NOT NULL AUTO_INCREMENT,
  `key` varchar(64) DEFAULT (uuid()),
  `name` varchar(45) DEFAULT NULL,
  `source` varchar(145) DEFAULT NULL COMMENT 'URL da API da fonte de dados',
  `deleted` enum('Y','N') DEFAULT 'N',
  `deleted_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
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
        Schema::dropIfExists('table_fonte_data');
    }
};
