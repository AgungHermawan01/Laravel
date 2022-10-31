<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <=7; $i++){
            $mhs= Mahasiswa::inRandomOrder()->first();
            $matkul= Matakuliah::inRandomOrder()->first();
            DB::table('krs')->insertGetId([
                'npm'=> $mhs->npm,
                'kode_matakuliah' => $matkul->kode_matakuliah,
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at'=> \Carbon\Carbon::now()
            ]);
    }
}
}
