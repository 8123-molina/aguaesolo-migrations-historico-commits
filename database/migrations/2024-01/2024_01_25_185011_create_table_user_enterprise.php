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
-- Ivan Nack                25/01/2024  REV_0.0: Criação tabela user_enterprise (usuario_empresa)
-- ===================================================================================================== 
CREATE TABLE IF NOT EXISTS `user_enterprise` (
  `user_id` int NOT NULL,
  `enterprise_id` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`,`enterprise_id`),
  KEY `FK_enterprise` (`enterprise_id`),
  CONSTRAINT `FK_user_enterprise_empresa` FOREIGN KEY (`enterprise_id`) REFERENCES `enterprise` (`id`),
  CONSTRAINT `FK_user_enterprise_usuario` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
SQL
                    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_user_enterprise');
    }
};
