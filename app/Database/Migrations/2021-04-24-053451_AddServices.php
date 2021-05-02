<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddServices extends Migration
{
	public function up()
	{
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'description' => [
                'type' => 'TEXT',
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('services');
	}

	public function down()
	{
        $this->forge->dropTable('services');
	}
}
