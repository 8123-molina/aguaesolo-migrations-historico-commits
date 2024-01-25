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
-- Ivan Nack                25/01/2024  REV_0.0: Criação tabela enterprise (empresa)
-- ===================================================================================================== 
CREATE TABLE IF NOT EXISTS `enterprise` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `key` varchar(64) DEFAULT (uuid()),
  `client_id` int NOT NULL,
  `reason` varchar(45) DEFAULT NULL,
  `cnpj` varchar(45) DEFAULT NULL,
  `adrress` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `deleted` enum('Y','N') DEFAULT 'N',
  `deleted_by` int DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_empreendimentos_client_idx` (`client_id`),
  CONSTRAINT `fk_empreendimentos_client` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
SQL
                    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_enterprise');
    }
};
