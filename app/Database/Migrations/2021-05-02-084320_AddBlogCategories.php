<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlogCategories extends Migration
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
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('blog_categories');
	}

	public function down()
	{
        $this->forge->dropTable('blog_categories');
	}
}
