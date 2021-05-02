<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlogs extends Migration
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
            'user_id' => [
                'type' => 'INT',
                'default' => null
            ],
            'blog_category_id' => [
                'type' => 'INT'
            ],
            'title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'image' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('blogs');
	}

	public function down()
	{
        $this->forge->dropTable('blogs');
	}
}
