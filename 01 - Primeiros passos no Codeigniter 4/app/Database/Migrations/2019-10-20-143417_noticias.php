<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Noticias extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
					'type' 			 => 'INT',
					'constraint' 	 => 5,
					'unsigned' 		 => TRUE,
					'auto_increment' => TRUE
			],
			'titulo' => [
					'type' 			 => 'VARCHAR',
					'constraint' 	 => '100',
			],
			'descricao' => [
					'type' 			 => 'TEXT',
					'null' 	 		 => TRUE,
			],
			'autor' => [
					'type' 			 => 'VARCHAR',
					'constraint' 	 => '100',
			],
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('noticias');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('noticias');
	}
}
