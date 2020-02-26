<?php
use App\Liga;
use Illuminate\Database\Seeder;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Liga::create([
            'nombre' =>'Liga santander',
            'pais' =>'España',
            'division'=>1,
            'continente'=>'Europa',
            'numero_equipos'=>20
        ]);
    }
}
