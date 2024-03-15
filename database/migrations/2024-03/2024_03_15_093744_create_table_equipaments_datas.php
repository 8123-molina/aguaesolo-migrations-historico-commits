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
            -- ======================================================================================================================== 
            --  Autor                    Data        Resumo  
            -- ----------------------   ----------  -----------  
            -- Ivan Nack                15/03/2024  Criar tabela equipaments_datas para armazenar dados enviados pelos equipamentos
            -- ========================================================================================================================
            CREATE TABLE `equipaments_data` (
            `id` int NOT NULL AUTO_INCREMENT,
            `equipaments_id` int DEFAULT NULL,
            `serial_number` varchar(50) DEFAULT NULL,
            `data_id` INT DEFAULT NULL  COMMENT 'Message id sent by equipament',
            `data_date` datetime DEFAULT NULL COMMENT 'DateTime sent by equipament',
            `data_source` varchar(50) DEFAULT NULL COMMENT 'who sent the data',
            `data` tinyblob DEFAULT NULL COMMENT 'The data',
            `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            UNIQUE KEY `Un_data_id` (`data_id`),
            KEY `fk_equipaments_datas_equipaments` (`equipaments_id`),
            CONSTRAINT `fk_equipaments_datas_equipaments` FOREIGN KEY (`equipaments_id`) REFERENCES `equipaments` (`id`)
            ) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci

SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_equipaments_datas');
    }
};
