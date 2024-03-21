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
        //
        DB::statement(
<<<SQL
            -- ===================================================================================================== 
            --  Autor                    Data        Resumo  
            -- ----------------------   ----------  -----------  
            -- Ivan Nack                20/03/2024  Criar tabela stations_data
            -- ===================================================================================================== 
            ALTER TABLE `stations`
	            CHANGE COLUMN `pluviometer_resolution` `pluviometer_resolution` DECIMAL(20,6) NULL DEFAULT NULL COMMENT 'Resoluçao do pluviometro' AFTER `range_probe`;
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
