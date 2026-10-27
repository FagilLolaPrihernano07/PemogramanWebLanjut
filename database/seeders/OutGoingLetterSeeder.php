<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- Jangan lupa import DB facade ini

class OutGoingLetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('outgoing_letters')->insert([
            [
                'nomor_surat' => '002/ft/c/2022', // Sesuaikan dengan nama kolom di database (pakai _ atau spasi)
                'tanggal' => '2005-05-05',
                'perihal' => 'undangan ngaji',
                'keterangan' => 'sosialisasi ngaji',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nomor_surat' => '001/ft/c/2029',
                'tanggal' => '2007-05-05',
                'perihal' => 'undangan akademik',
                'keterangan' => 'sosialisasi akademik',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nomor_surat' => '003/ft/c/2008',
                'tanggal' => '2009-09-05',
                'perihal' => 'undangan sosialisasi',
                'keterangan' => 'sosialisasi lomba',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}