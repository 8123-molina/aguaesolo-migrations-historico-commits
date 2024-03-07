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
ALTER TABLE `stations`
	ADD COLUMN `equipaments_id` INT(10) NULL DEFAULT NULL COMMENT 'Equipamentos ID' AFTER `basin_id`,
	CHANGE COLUMN `endereco` `address` TEXT NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci' AFTER `hydrological_network_position`,
	CHANGE COLUMN `coordenadas` `coordinates` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_0900_ai_ci' AFTER `address`,
	CHANGE COLUMN `frequencia` `frequence` INT(10) NULL DEFAULT NULL AFTER `coordinates`,
	CHANGE COLUMN `limite_discrepancia` `discrepance_limit` DECIMAL(10,2) NULL DEFAULT NULL AFTER `data_extra`,
	
	ADD INDEX `fk_station_enterprise_idx` (`enterprise_id`) USING BTREE,
	ADD CONSTRAINT `fk_station_equipaments` FOREIGN KEY (`equipaments_id`) REFERENCES `equipaments` (`id`) ON UPDATE NO ACTION ON DELETE NO ACTION;
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
