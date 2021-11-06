<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodata =
        [
            ['nama_lengkap'=>'Alya Nurlia'           , 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'23-04-2005', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan'],
            ['nama_lengkap'=>'Anggi Fitria'          , 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'21-05-2004', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan'],
            ['nama_lengkap'=>'Anisa Andriani'        , 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'19-03-2004', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan'],
            ['nama_lengkap'=>'Arif Muhammad Iqbal'   , 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'11-07-2003', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Laki-Laki'],
            ['nama_lengkap'=>'Astri Fitriana'        , 'tempat_lahir'=>'Bandung', 'tanggal_lahir'=>'02-04-2004', 'alamat'=>'Bandung', 'jenis_kelamin'=>'Perempuan']
        ];
        DB::table('biodatas')->insert($biodata);
    }
}
