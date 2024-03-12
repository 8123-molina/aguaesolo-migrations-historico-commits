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
            -- Ivan Nack                06/03/2024  Inserir dados na tabela stations_equipaments
            -- ===================================================================================================== 
            INSERT INTO `stations_equipaments` (`station_id`, `equipament_id`) VALUES 
             (2, 2),
             (3, 3),
             (4, 4);

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
