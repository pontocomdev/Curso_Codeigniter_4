<?php namespace App\Database\Seeds;

class Usuarios extends \CodeIgniter\Database\Seeder
{
        public function run()
        {

            $data = [
                'user' => 'admin',
                'senha'    => md5('123'),     
                ];

            $this->db->table('usuarios')->insert($data);
        }
}