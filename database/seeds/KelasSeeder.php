<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i =1; $i<=34; $i++){
        DB::table('kelas')->insert([
            'nama_kelas' =>'RPL'. $faker->unique->numberBetween(1,34),
            'kode_ruangan' => $faker->numberBetween(1000000000,900000000),
            'nama_gedung' => 'TI'
        ]);
        }
    }
}
