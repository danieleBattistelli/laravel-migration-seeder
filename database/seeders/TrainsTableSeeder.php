<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => '2025-03-25 08:00:00',
                'arrival_time' => '2025-03-25 12:00:00',
                'train_code' => 'T12345',
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Torino Porta Nuova',
                'departure_time' => '2025-03-25 09:00:00',
                'arrival_time' => '2025-03-25 14:00:00',
                'train_code' => 'I67890',
            ],
            // Aggiungi altri 8 treni con dati fittizi
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Firenze SMN',
                'arrival_station' => 'Venezia S. Lucia',
                'departure_time' => '2025-03-25 10:00:00',
                'arrival_time' => '2025-03-25 13:00:00',
                'train_code' => 'T54321',
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Bologna Centrale',
                'arrival_station' => 'Verona Porta Nuova',
                'departure_time' => '2025-03-25 11:00:00',
                'arrival_time' => '2025-03-25 12:30:00',
                'train_code' => 'I09876',
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Genova Piazza Principe',
                'arrival_station' => 'Pisa Centrale',
                'departure_time' => '2025-03-25 12:00:00',
                'arrival_time' => '2025-03-25 14:00:00',
                'train_code' => 'T11223',
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Torino Porta Susa',
                'arrival_station' => 'Roma Tiburtina',
                'departure_time' => '2025-03-25 13:00:00',
                'arrival_time' => '2025-03-25 17:00:00',
                'train_code' => 'I44556',
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Milano Rogoredo',
                'arrival_station' => 'Napoli Afragola',
                'departure_time' => '2025-03-25 14:00:00',
                'arrival_time' => '2025-03-25 18:00:00',
                'train_code' => 'T77889',
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Bari Centrale',
                'departure_time' => '2025-03-25 15:00:00',
                'arrival_time' => '2025-03-25 19:00:00',
                'train_code' => 'I33445',
            ],
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Venezia Mestre',
                'arrival_station' => 'Trieste Centrale',
                'departure_time' => '2025-03-25 16:00:00',
                'arrival_time' => '2025-03-25 18:00:00',
                'train_code' => 'T66778',
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Bologna Centrale',
                'arrival_station' => 'Firenze SMN',
                'departure_time' => '2025-03-25 17:00:00',
                'arrival_time' => '2025-03-25 18:00:00',
                'train_code' => 'I55667',
            ],
        ];

        DB::table('trains')->insert($trains);
    }
}
