<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('user')->insert([
            'username' => 'aqil',
            'email' => '2110817310012@mhs.ulm.ac.id',
            'password' => password_hash('140903', PASSWORD_DEFAULT),
        ]);
    }
}