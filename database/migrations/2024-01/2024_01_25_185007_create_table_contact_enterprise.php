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
-- Ivan Nack                25/01/2024  REV_0.0: Criação tabela contact_enterprise (contato_empresa)
-- ===================================================================================================== 
CREATE TABLE IF NOT EXISTS `contact_enterprises` (
  `id` int NOT NULL AUTO_INCREMENT,
  `contact_id` int NOT NULL,
  `enterprise_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contact_enterprise_contact` (`contact_id`),
  KEY `fk_contact_enterprise_enterprise` (`enterprise_id`),
  CONSTRAINT `fk_contact_enterprise_contact` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`),
  CONSTRAINT `fk_contact_enterprise_enterprise` FOREIGN KEY (`enterprise_id`) REFERENCES `enterprises` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
SQL
                    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_contact_enterprise');
    }
};
