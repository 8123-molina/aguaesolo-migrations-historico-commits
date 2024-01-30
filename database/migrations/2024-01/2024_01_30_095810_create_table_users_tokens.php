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
            -- Ivan Nack                30/01/2024  REV_0.0: Criação tabela users_tokens
            -- Quando `type`='access' o users_id + token deve ser unique
            -- Quando `type`='remember' OR'temp' expire_at deve tem uma data
            -- ===================================================================================================== 
            CREATE TABLE `users_tokens` (
            `users_id` int NOT NULL,
            `token` varchar(256) NOT NULL,
            `type` enum('access','remember','temp') NOT NULL COMMENT 'Quando type=access o users_id + token é unique',
            `expire_at` datetime DEFAULT NULL,
            UNIQUE KEY `functional_index` (`users_id`,`type`,((case when (`type` = _utf8mb4'access') then 1 end))),
            CONSTRAINT `users_tokens_users_FK` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci
SQL
        );

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_users_tokens');
    }
};
