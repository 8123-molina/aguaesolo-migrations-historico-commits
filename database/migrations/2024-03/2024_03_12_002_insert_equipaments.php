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
            -- Ivan Nack                06/03/2024  Inserir dados na tabela equipaments
            -- ===================================================================================================== 
            INSERT IGNORE INTO `equipaments` (`name`, `description`, `equipaments_types_id`, `brand`, `model`, `serial_number`, `instalations_date`, `uninstalations_date`, `deleted`, `deleted_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01307999SKYB518', '2024-03-11', '2024-03-11', 0, 1, '2024-03-11 14:02:07', '2024-03-07 20:07:37', '2024-03-11 17:15:10'),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01534757SKY19F6', NULL, NULL, 1, 1, '2024-03-11 22:16:08', '2024-03-07 20:08:16', '2024-03-11 22:16:07'),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01534762SKYAE0F', NULL, NULL, 0, 1, '2024-03-11 21:05:47', '2024-03-07 20:08:16', '2024-03-11 22:09:37'),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01534761SKY2A0A', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:16', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01609972SKY9301', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:16', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01609977SKY271A', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:16', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01609969SKY06F2', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:16', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01609981SKY372E', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:16', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01609988SKYD351', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:16', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01650913SKYE6A2', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01651957SKY4B06', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01651964SKYE729', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01651951SKY32E8', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01650645SKYB166', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01651973SKY8B56', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01651966SKYEF33', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01651954SKYBEF7', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01811072SKY1ABD', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01811084SKY4AF9', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01811063SKY7690', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01811068SKY0AA9', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01811065SKY7E9A', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01811101SKY0F4E', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01811110SKYB37B', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL),
                ('Transmissor', 'Transmissor onix', 1, 'Orbcomm', 'ST', '01811066SKY029F', NULL, NULL, 0, NULL, NULL, '2024-03-07 20:08:17', NULL);
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
