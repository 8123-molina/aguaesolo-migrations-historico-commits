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
            -- Ivan Nack                30/01/2024  REV_0.0: Criação tabela users_roles (usuarios x papeis)
            -- ===================================================================================================== 
            CREATE TABLE `users_roles` (
            `role_id` int NOT NULL,
            `user_id` int NOT NULL,
            `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
            `data_update` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`role_id`, `user_id`),
            CONSTRAINT `fk_roles-users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
            CONSTRAINT `fk_users-users_roles` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
SQL
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_roles');
    }
};
