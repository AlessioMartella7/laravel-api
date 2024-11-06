<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $typeData = [
            [
                'name' => 'Full-Stack',
                'description' => 'La programmazione full-stack copre sia il front-end che il back-end di un\'applicazione, permettendo di sviluppare e gestire sia l\'interfaccia utente che la logica di server e database per una soluzione completa.',
            ],
            [
                'name' => 'Front-End',
                'description' => 'La programmazione front-end si concentra sulla creazione di interfacce utente interattive e reattive, utilizzando tecnologie come HTML, CSS, JavaScript e framework moderni per garantire un\'esperienza utente ottimale.',
            ],
            [
                'name' => 'Back-End',
                'description' => 'La programmazione back-end riguarda lo sviluppo della logica server-side, la gestione delle API, e la connessione con i database, assicurando che le funzionalità e le operazioni siano eseguite correttamente e in modo sicuro.',
            ],
            [
                'name' => 'Database',
                'description' => 'La programmazione di database si occupa della progettazione e gestione delle strutture dati, dell\'ottimizzazione delle query e della garanzia della sicurezza e dell\'efficienza nell\'archiviazione e recupero delle informazioni.',
            ]
        ];

        foreach ($typeData as $singleTypeData) {
            $type = new Type();
            $type->name = $singleTypeData ['name'];
            $type->description = $singleTypeData ['description'];
            $type->save();
        }
    }
}
