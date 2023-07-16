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
        Client::factory(30)->create();

        $client = [
            [
                'last_name' => 'Encina',
                'first_name' => 'Altair Jericko',
                'middle_name' => 'B.',
                'phone_number' => '09078476063',
                'address' => 'Pooc Occidental, Tubigon, Bohol.',
                'birth_date' => '2002-08-12',
                'email' => 'altenci0812@gmail.com',
                'initial_deposit' => 50000,
            ],
        ];

        foreach($client as $c) {
            Client::create($c);
        }
    }
}
