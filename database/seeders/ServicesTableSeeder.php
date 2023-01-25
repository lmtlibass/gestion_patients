<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Service::create([
            'nom_service' => 'service médiacle',
            'description' => 'service médicale du crousz pour la prise en charge des étudiants',
            'medecin'     => 'Docteur Mbodj',
            'emplacement' => 'Paviollon D',
            'horraires'   => 'De 8h à 23h',
            'user_id'     => 1  
        ]);
        Service::create([
            'nom_service' => 'Pharmacie',
            'description' => 'pharmacie du crousz pour la prise en charge des étudiants',
            'medecin'     => 'Docteur Lo',
            'emplacement' => 'Paviollon D',
            'horraires'   => 'De 8h à 23h',
            'user_id'     => 1  
        ]);
        Service::create([
            'nom_service' => 'Cabine dantaire',
            'description' => 'Cabinet dentaire du crousz pour la prise en charge des étudiants',
            'medecin'     => 'Docteur Thiam',
            'emplacement' => 'Paviollon E',
            'horraires'   => 'De 8h à 23h',
            'user_id'     => 1  
        ]);
    }
}
