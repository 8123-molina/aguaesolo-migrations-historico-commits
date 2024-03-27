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
        DB::statement("
        CREATE VIEW station_data_group_date AS
        select 
            `stations_data`.`station_id` AS `station_id`
            ,`stations_data`.`date` AS `date`
            ,(select json_objectagg(`s`.`name`,ifnull(`sd`.`data`,'null')) AS `dataJson` 
        from (`stations_data` `sd` 
            left join `sensors` `s` on((`sd`.`sensors_id` = `s`.`id`))) 
        where ((`sd`.`station_id` = `stations_data`.`station_id`) 
            and (date_format(`sd`.`date`,'%Y-%m-%d') = date_format(`stations_data`.`date`,'%Y-%m-%d'))) 
        group by `sd`.`station_id`) AS `dataJson` from `stations_data`
    ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS station_data_group_date");
    }
};
