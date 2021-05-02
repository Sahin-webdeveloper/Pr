<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddServiceIntroductions extends Migration
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
            ],
            'service_id' => [
                'type' => 'INT',
            ],
            'type'          => [
                'type' => 'VARCHAR',
                'default' => 'select',
                'constraint' => '50'
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('service_introductions');
	}

	public function down()
	{
        $this->forge->dropTable('service_introductions');
	}
}
