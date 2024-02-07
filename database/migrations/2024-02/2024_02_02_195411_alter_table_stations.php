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
        -- Ivan Nack                30/01/2024  REV_0.0: Adcionar colunas 
        -- ===================================================================================================== 
        ALTER TABLE `stations` 
            MODIFY `basin_id` INT NULL DEFAULT NULL COMMENT 'Bacia ID' AFTER enterprise_id,
            ADD `code_PLU` varchar(8) NULL DEFAULT NULL COMMENT 'Codigo PLU' AFTER `basin_id`,
            ADD `code_FLU` varchar(8) NULL DEFAULT NULL COMMENT 'Codigo FLU' AFTER `code_PLU`,
            ADD `river` varchar(50) NULL DEFAULT NULL COMMENT 'rio' AFTER `code_FLU`,
            ADD `drainage_area` INT NULL DEFAULT NULL COMMENT 'Área de drenagem' AFTER `river`,
            ADD `localization` TEXT NULL DEFAULT NULL  COMMENT 'Localização' AFTER `drainage_area`,
            ADD `accessibility` TEXT NULL DEFAULT NULL COMMENT 'Acessibilidade à estação' AFTER `localization`,
            ADD `infra` INT NULL DEFAULT NULL COMMENT 'Infra-estrutura' AFTER `accessibility`,
            ADD `potamography` INT NULL DEFAULT NULL COMMENT 'Potamografia' AFTER `infra`,
            ADD `overflow_quota` INT NULL DEFAULT NULL COMMENT 'Cota de transbordamento' AFTER `potamography`,
            ADD `operation_months` varchar(30) NULL DEFAULT NULL  COMMENT 'Meses de operação 1 a 12' AFTER `overflow_quota`,
            ADD `section_characteristics` TEXT NULL DEFAULT NULL  COMMENT 'Características do trecho (seção de medição) JSON {regim:"","conformation":"", "bottom":"}' AFTER `operation_months`,
            ADD `ruler_section_control` INT NULL DEFAULT NULL COMMENT 'Controle (seção de réguas - jusante) JSON {"control_type":"","section_rules_distance":""}' AFTER `section_characteristics`,
            ADD `hydrological_network_position` INT NULL DEFAULT NULL COMMENT 'Posição em relação à rede hidrológica JSON {"upstream_station":"","downstream_station":""}' AFTER `ruler_section_control`
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
