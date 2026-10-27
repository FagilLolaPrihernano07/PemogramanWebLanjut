<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class IncomingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('incomingletters')->insert([
            [
                'nomor_surat' => '002/ft/c/2022', // Diubah dari 'nomor surat' menjadi 'nomor_surat'
                'tanggal' => '2005-05-05',      // Disarankan format tanggal YYYY-MM-DD untuk database
                'pengirim' => 'Fakultas',
                'perihal' => 'undangan rapat',
                'keterangan' => 'Undangan Rapat Kordinat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_surat' => '001/fb/c/2029',
                'tanggal' => '2007-05-05',
                'pengirim' => 'BBB',
                'perihal' => 'undangan akademik',
                'keterangan' => 'Undangan Akademik',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nomor_surat' => '003/ft/c/2008',
                'tanggal' => '2009-09-05',
                'pengirim' => 'FKIP',
                'perihal' => 'undangan sosialisasi',
                'keterangan' => 'Undangan Rapat Sosialisasi',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}