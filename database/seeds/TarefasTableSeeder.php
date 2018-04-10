<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class TarefasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $faker = Faker::create();
        $users = \App\User::all();
        foreach ($users as $user) 
        {
        	for($i = 0; $i < 5; $i++)
	        {
	        	DB::table('tarefas')->insert([
	        		'usuarios_id' => $user->id,
	        		'status' => $faker->word,
	        		'descricao' => $faker->text
	        		]);
	        }
        }
    }
}
