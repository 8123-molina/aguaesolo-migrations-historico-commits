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
            -- Ivan Nack                06/03/2024  REV_0.0: Alterar tabela stations_equipaments
            -- ===================================================================================================== 
            ALTER TABLE aguaesolo.stations_equipaments 
                DROP COLUMN description,
                DROP COLUMN brand,
                DROP COLUMN modelo,
                DROP COLUMN autonomy,
                DROP COLUMN instalations_date,
                DROP COLUMN uninstalations_date,
                DROP COLUMN `key`,
                DROP COLUMN deleted,
                DROP COLUMN deleted_by,
                DROP COLUMN deleted_at,
                CHANGE data_update updated_at datetime on update CURRENT_TIMESTAMP NULL,
                CHANGE station_id station_id int NOT NULL AFTER id,
                ADD equipament_id INT NOT NULL AFTER station_id,
                ADD CONSTRAINT FK_stations_equipaments_equipaments FOREIGN KEY (equipament_id) REFERENCES aguaesolo.equipaments(id) ON DELETE RESTRICT ON UPDATE RESTRICT;


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
