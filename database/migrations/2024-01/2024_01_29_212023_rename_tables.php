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
        DB::statement("RENAME TABLE aguaesolo.basin TO aguaesolo.basins;");
        DB::statement("RENAME TABLE aguaesolo.client TO aguaesolo.clients;");
        DB::statement("RENAME TABLE aguaesolo.contact TO aguaesolo.contacts;");
        DB::statement("RENAME TABLE aguaesolo.contact_client TO aguaesolo.contacts_clients;");
        DB::statement("RENAME TABLE aguaesolo.contact_enterprise TO aguaesolo.contacts_enterprises;");
        DB::statement("RENAME TABLE aguaesolo.data_source TO aguaesolo.data_sources;");
        DB::statement("RENAME TABLE aguaesolo.enterprise TO aguaesolo.enterprises;");
        DB::statement("RENAME TABLE aguaesolo.station TO aguaesolo.stations;");
        DB::statement("RENAME TABLE aguaesolo.station_data TO aguaesolo.stations_data;");
        DB::statement("RENAME TABLE aguaesolo.user TO aguaesolo.users;");
        DB::statement("RENAME TABLE aguaesolo.user_client TO aguaesolo.users_clients;");
        DB::statement("RENAME TABLE aguaesolo.user_enterprise TO aguaesolo.users_enterprises;");
        DB::statement("RENAME TABLE aguaesolo.user_station TO aguaesolo.users_stations;");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
