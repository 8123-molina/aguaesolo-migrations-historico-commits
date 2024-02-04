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
            -- Ivan Nack                30/01/2024  REV_0.0: Criação tabela users_permitions (usuarios x permissões)
            -- ===================================================================================================== 
            CREATE TABLE `users_permitions` (
            `permition_id` int NOT NULL,
            `user_id` int NOT NULL,
            `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
            `data_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`permition_id`, `user_id`),
            CONSTRAINT `fk_permitions-users_permitions` FOREIGN KEY (`permition_id`) REFERENCES `permitions` (`id`),
            CONSTRAINT `fk_users-users_permitions` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_permitions');
    }
};
