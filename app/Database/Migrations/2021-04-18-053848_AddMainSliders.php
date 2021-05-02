<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMainSliders extends Migration
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
                'constraint' => '100',
            ],
            'short_description' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'path' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'url' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('main_sliders');
    }

	public function down()
	{
        $this->forge->dropTable('main_sliders');
	}
}
