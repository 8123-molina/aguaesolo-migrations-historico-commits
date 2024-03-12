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
            -- ===================================================================================================== 
            --  Autor                    Data        Resumo  
            -- ----------------------   ----------  -----------  
            -- Ivan Nack                06/03/2024  Inserir dados na tabela stations
            -- ===================================================================================================== 
            INSERT IGNORE INTO `stations` (`name`, `enterprise_id`, `basin_id`, `code_PLU`, `code_FLU`, `river`, `drainage_area`, `localization`, `accessibility`, `infra`, `potamography`, `overflow_quota`, `operation_months`, `section_characteristics`, `ruler_section_control`, `hydrological_network_position`, `address`, `coordinates`, `frequence`, `data_extra`, `discrepance_limit`, `data_source_id`, `deleted`, `deleted_by`, `deleted_at`) VALUES 
            ('Teste ANA', 1, NULL, NULL, '15552900', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, NULL, NULL),
            ('Teste Agua e Solo 1', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-03-05 02:02:46'),
            ('Teste Agua e Solo 2', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2024-03-05 02:02:41'),
            ('Teste Agua e Solo 3', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);

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
