<?php
use App\Equipo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipo::create([
            'nombre' =>'Real Betis',
            'pais' =>'España',
            'division'=>1,
            'continente'=>'Europa',
            'numero_jugadores'=>20
        ]);
    }
}
