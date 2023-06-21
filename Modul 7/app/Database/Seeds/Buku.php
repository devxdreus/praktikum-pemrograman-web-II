<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\BukuModel;

class Buku extends Seeder
{
    public function run()
    {
        $this->db->table('buku')->insert([
            'judul' => 'Laskar Pelangi',
            'penulis' => 'Andrea Hirata',
            'penerbit' => 'Bentang Pustaka',
            'tahun_terbit' => '2005'
        ]);
}
} 