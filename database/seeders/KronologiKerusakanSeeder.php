<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KronologiKerusakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kronologi_kerusakan')->insert([
            ['nama_kronologi' => 'Mati total terkena air'],
            ['nama_kronologi' => 'Mati total terbentur/jatuh'],
            ['nama_kronologi' => 'Touchscreen eror /tidak bisa di sentuh'],
            ['nama_kronologi' => 'Baterai cepat habis'],
            ['nama_kronologi' => 'Tidak bisa di cas'],
            ['nama_kronologi' => 'Jaringan 4G hilang'],
            ['nama_kronologi' => 'Sinyal tidak muncul'],
            ['nama_kronologi' => 'Kamera tidak berfungsi'],
            ['nama_kronologi' => 'Speaker/Mic tidak berfungsi'],
            ['nama_kronologi' => 'Lampu LCD padam'],
            ['nama_kronologi' => 'Mati karena game'],
        ]);
    }
}
