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
        DB::unprepared("
            CREATE FUNCTION joinStationDatatoDate(stationId INT) RETURNS TEXT
            DETERMINISTIC
            READS SQL DATA
            BEGIN
                DECLARE result TEXT;
                
                SET result = (
                    SELECT 
                        CONCAT(
                            '{',
                            GROUP_CONCAT(
                                CONCAT('\"', sensors.name, '\":', IFNULL(data, 'null'))
                            ),
                            '}'
                        ) AS dataJson
                    FROM 
                        aguaesolo.stations_data 
                    LEFT JOIN 
                        aguaesolo.sensors ON aguaesolo.stations_data.sensors_id = aguaesolo.sensors.id 
                    WHERE 
                        station_id = stationId
                    GROUP BY 
                        station_id, date
                    
                );
                
                RETURN result;
            END;
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP FUNCTION IF EXISTS joinStationDatatoDate");
    }
};