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
ALTER TABLE `stations`
	CHANGE COLUMN `coordinates` `coordinates` VARCHAR(100) NULL DEFAULT NULL COMMENT 'Coordenadas' COLLATE 'utf8mb4_0900_ai_ci' AFTER `address`,
	CHANGE COLUMN `frequence` `frequence` INT(10) NULL DEFAULT NULL COMMENT 'Frequencia' AFTER `coordinates`,
	ADD COLUMN `level_offset` DECIMAL(10,2) NULL DEFAULT NULL COMMENT 'Ajuste de nivel' AFTER `frequence`,
	ADD COLUMN `real_quota_offset` DECIMAL(10,2) NULL DEFAULT NULL COMMENT 'Ajuste de cota real' AFTER `level_offset`,
	ADD COLUMN `zero_scale` INT(10) NULL DEFAULT NULL COMMENT 'Zero de escala/Cota zero' AFTER `real_quota_offset`,
	ADD COLUMN `range_probe` INT(10) NULL DEFAULT NULL COMMENT 'Range da sonda' AFTER `zero_scale`,
	ADD COLUMN `pluviometer_resolution` INT(10) NULL DEFAULT NULL COMMENT 'Resoluçao do pluviometro' AFTER `range_probe`,
	CHANGE COLUMN `data_extra` `data_extra` JSON NULL DEFAULT NULL COMMENT 'Dados extra' AFTER `pluviometer_resolution`,
	CHANGE COLUMN `discrepance_limit` `discrepance_limit` DECIMAL(10,2) NULL DEFAULT NULL COMMENT 'Limite de discrepancia' AFTER `data_extra`,
	CHANGE COLUMN `data_source_id` `data_source_id` INT(10) NULL DEFAULT NULL COMMENT 'ID da fonte de dados' AFTER `discrepance_limit`;
SQL
);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
