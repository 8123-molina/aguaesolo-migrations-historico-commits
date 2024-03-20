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
        -- Ivan Nack                06/03/2024  Adicionar coluna station_type_id
        -- ===================================================================================================== 
        ALTER TABLE `stations`
            ADD COLUMN `station_type_id` INT NULL DEFAULT NULL COMMENT 'Tipo de estação' AFTER `enterprise_id`,
            ADD KEY (station_type_id),
            ADD CONSTRAINT FK_station_type_id FOREIGN KEY (station_type_id) REFERENCES stations_types(id)
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
