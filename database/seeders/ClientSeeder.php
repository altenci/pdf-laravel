<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $client = [
            [
                'last_name' => 'Encina',
                'first_name' => 'Altair Jericko',
                'middle_name' => 'B.',
                'phone_number' => '09078476063',
                'address' => 'Pooc Occidental, Tubigon, Bohol',
                'birth_date' => '2002-08-12',
                'email' => 'altenci0812@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Amizola',
                'first_name' => 'Mary Irish',
                'middle_name' => 'T.',
                'phone_number' => '09639015522',
                'address' => 'Bosongon, Tubigon, Bohol',
                'birth_date' => '2002-05-13',
                'email' => 'amizolamaryirish18@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Sierras',
                'first_name' => 'Russel',
                'middle_name' => 'G.',
                'phone_number' => '09078476063',
                'address' => 'Panaytayon, Tubigon, Bohol',
                'birth_date' => '2002-09-22',
                'email' => 'russelsierras@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Flores',
                'first_name' => 'Maribel',
                'middle_name' => 'A.',
                'phone_number' => '09705675335',
                'address' => 'Pooc Oriental, Tubigon, Bohol',
                'birth_date' => '2002-12-08',
                'email' => 'mrblflrs9301@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Bucotot',
                'first_name' => 'Ma. Ellaine',
                'middle_name' => 'S.',
                'phone_number' => '09618170838',
                'address' => 'Mandaug, Calape, Bohol',
                'birth_date' => '2002-07-14',
                'email' => 'ellbucotot123@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Ayag',
                'first_name' => 'Niña Marie',
                'middle_name' => 'D.',
                'phone_number' => '09126452690',
                'address' => 'Mandaug, Calape, Bohol',
                'birth_date' => '2002-01-18',
                'email' => 'nyaanyag3@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Flores',
                'first_name' => 'Rosalino',
                'middle_name' => 'Tumabang',
                'phone_number' => '09359766852',
                'address' => 'Pinayagan Sur, Tubigon, Bohol.',
                'birth_date' => '2002-12-29',
                'email' => 'fross0988@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Calunia',
                'first_name' => 'Lester',
                'middle_name' => 'Cosinero',
                'phone_number' => '09987453645',
                'address' => 'Guiwanon, Tubigon, Bohol.',
                'birth_date' => '2002-07-05',
                'email' => 'calunialester7@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Caminos',
                'first_name' => 'Apple Jean',
                'middle_name' => 'Andoy',
                'phone_number' => '0977455645',
                'address' => 'Calape, Bohol.',
                'birth_date' => '2000-08-04',
                'email' => 'applegwaps23@gmail.com',
                'initial_deposit' => 50000,
            ],
            [
                'last_name' => 'Balili',
                'first_name' => 'Louise Demean',
                'middle_name' => 'V.',
                'phone_number' => '09993138692',
                'address' => 'Ilijan Norte, Tubigon, Bohol',
                'birth_date' => '2000-09-09',
                'email' => 'balililouisedemean@gmail.com',
                'initial_deposit' => 50000,
            ],
        ];

        foreach($client as $c) {
            Client::create($c);
        }
    }
}
