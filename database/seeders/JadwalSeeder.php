<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Dosen;
use App\Models\Matakuliah;


class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 0; $i <=7; $i++){
            $dosen= Dosen::inRandomOrder()->first();
            $matkul= Matakuliah::inRandomOrder()->first();
            DB::table('jadwal')->insertGetId([
                'nidn' => $dosen->nidn,
                'kode_matakuliah' => $matkul->kode_matakuliah,
                'kelas' => $faker ->randomElement(['A','B','C','D']),
                'hari' => $faker ->randomElement(['Senin', 'Selasa', 'Rabu','Kamis', 'Jumat']),
                'jam' => $faker ->randomElement(["09:00:00", "11:30:00", "14:00:00"]),
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now()
            ]);
}
}

}