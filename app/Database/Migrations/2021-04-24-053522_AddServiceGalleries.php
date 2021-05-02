<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddServiceGalleries extends Migration
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
            'description' => [
                'type' => 'TEXT',
            ],
            'service_id' => [
                'type' => 'INT',
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('service_galleries');
	}

	public function down()
	{
        $this->forge->dropTable('service_galleries');
	}
}
