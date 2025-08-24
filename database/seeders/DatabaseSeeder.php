<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Arbitro;
use App\Models\Categoria;
use App\Models\Club;
use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'nombre'=>'pepito2',
            'apellido'=>'mamanii',
            'username'=>'pepito1234',
            'password'=>'pepito3244',
            'email'=>'pepito2@gmail.com',
            'rol'=>'1'
        ]);
        Club::create([
            'nombre_prop'=>'jaimito',
            'apellido_prop'=>'choque',
            'ci_prop'=>'123412313',
            'fecha_nac'=>'1995-03-15',
            'foto'=>'pdpdp.pnj',
            'nombre_club'=>'CAN',
            'tel_cel'=>'5252562',
            'gmail'=>'can1@gmail.com',
            'abreviatura'=>'CAN'
        ]);
        Arbitro::create([
            'nombre_arb'=>'Juan',
            'apellido_arb'=>'Alcachofa',
            'ci_arb'=>'4121312',
            'fecha_nac_arb'=>'1995-12-12',
            'foto'=>'Juan.jpg',
            'nivel'=>'Nivel 3',
            'cel_arb'=>'54512',
            'gmail_arb'=>'Juan1@gmail.com',
            'estado'=>'Habilitado',
            'nota'=>'Es un arbitro nuevo'
        ]);
        Categoria::create([
            'categoria'=>'1raHonor',
            'rama'=>'Masculino',
            'club_id'=>'1'
        ]);
        Equipo::create([
            'nombre_eq'=>'San Luis',
            'estado'=>'Activo',
            'nota'=>'Observaciones por W.O',
            'categoria_id'=>'1'
        ]);
        Jugador::create([
            'nombre'=>'Mario',
            'apellido'=>'Lobo',
            'ci'=>'124899436',
            'fecha_naci'=>'2001-12-03',
            'foto'=>'mario.jpg',
            'rama'=>'Masculino',
            'equipo_id'=>'1'
        ]);
    }
}