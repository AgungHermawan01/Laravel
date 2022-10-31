<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
            $matakuliah= array('Arsitektur Komputer', 'Struktur Data', 'Organisasi Management', 'Pengolahan Basis Data');
                foreach ($matakuliah as $value)
                {
                    DB::table('matakuliah')->insert([
                        'kode_matakuliah'=>rand(20120008,20120999),
                        'nama_matakuliah'=> $value,
                        'sks'=> $faker->randomElement([2,3]),
                        'created_at'=> \Carbon\Carbon::now(),
                        'updated_at'=> \Carbon\Carbon::now()
            ]);
        }
        
    }
}
