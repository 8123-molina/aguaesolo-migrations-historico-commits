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
            -- Ivan Nack                05/03/2024  REV_0.0: Criação tabela roles_permitions (perfis_permitisões)
            -- ===================================================================================================== 
            CREATE TABLE `roles_permitions` (
            `id` int NOT NULL AUTO_INCREMENT,
            `roles_id`  INT NOT NULL,
            `permitions_id`  INT NOT NULL,
            `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `data_update` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            CONSTRAINT `fk_roles_permitions_roles` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`),
            CONSTRAINT `fk_roles_permitions_permitions` FOREIGN KEY (`permitions_id`) REFERENCES `permitions` (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_roles_permitions');
    }
};
