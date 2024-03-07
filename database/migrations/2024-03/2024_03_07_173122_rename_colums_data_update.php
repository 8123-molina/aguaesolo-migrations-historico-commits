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
        DB::statement('ALTER TABLE equipaments_types RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE level_references RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE localization_sketch RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE measurements_liquid_solid RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE permitions RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE photos RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE roles RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE roles_permitions RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE ruler_sections RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE stations RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE stations_inclinations RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE stations_monitoring_types RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE users_permitions RENAME COLUMN data_update TO updated_at;');
        DB::statement('ALTER TABLE users_roles RENAME COLUMN data_update TO updated_at;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
