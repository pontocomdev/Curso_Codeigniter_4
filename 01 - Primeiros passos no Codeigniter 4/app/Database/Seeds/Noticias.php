<?php 
namespace App\Database\Seeds;

class Noticias extends \CodeIgniter\Database\Seeder{

	public function run(){
		$data = [
			'titulo' => 'Titulo da Noticia 1',
			'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem at nulla deserunt consectetur ipsam explicabo eos, illo excepturi quis aspernatur optio sapiente itaque laudantium doloremque dolorum fugiat, nesciunt, voluptatem. Dolorem.',
			'autor' => 'Emerson Carvalho'
		];

		$this->db->table('noticias')->insert($data);
	}
}

