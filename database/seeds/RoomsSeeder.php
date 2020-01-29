<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i =1; $i<=12; $i++){
       
        DB::table('rooms')->insert([
            'kelas_id' => $faker->unique->numberBetween(195,206),
            'nama' =>'10 RPL '.$faker->unique->numberBetween(1,12), 
            'angkatan' =>'2022'  
            ]);
       
    }
}
}