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
            INSERT IGNORE INTO `equipaments_types` (`name`, `description`, `deleted`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
                ('Transmisor', 'Transmissor Satélite', 0, 1, '2024-03-11 18:31:43', '2024-03-07 10:22:52', '2024-03-11 18:31:50'),
                ('CLP', 'Controlador Lógico Programável', 0, NULL, NULL, '2024-03-12 11:40:09', NULL);
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
