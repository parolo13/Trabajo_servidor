<?php

use App\Profession;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //$professions =DB::select('SELECT id FROM professions where title=? ',['Back-end developer']);
        


        User::create([
            'name' =>'Pablo',
            'email' =>'pablo@ada.es',
            'password'=>bcrypt('laravel'),
            'profession_id'=>1,
            'is_admin'=>1
        ]);

        factory(User::class,48)->create();
    }
}
