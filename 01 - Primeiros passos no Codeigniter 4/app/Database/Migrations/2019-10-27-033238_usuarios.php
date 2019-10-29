<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
{
	public function up()
	{
		$this->forge->addField([
                        'id' => [
                                'type'           => 'INT',
                                'constraint'     => 5,
                                'unsigned'       => TRUE,
                                'auto_increment' => TRUE,
                        ],
                        'user' => [
                                'type'           => 'VARCHAR',
                                'constraint'     => '100',
                        ],
                        'senha' => [
                               'type'           => 'TEXT',
                        ],
                ]);
                $this->forge->addKey('id', TRUE);
                $this->forge->createTable('usuarios');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('usuarios');
	}
}
