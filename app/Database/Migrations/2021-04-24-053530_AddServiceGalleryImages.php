<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddServiceGalleryImages extends Migration
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
            'path' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'service_gallery_id' => [
                'type' => 'INT',
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('service_gallery_images');
	}

	public function down()
	{
        $this->forge->dropTable('service_gallery_images');
	}
}
