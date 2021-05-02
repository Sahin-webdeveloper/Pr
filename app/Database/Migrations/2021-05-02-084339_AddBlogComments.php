<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlogComments extends Migration
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
            'blog_id' => [
                'type' => 'INT',
                'default' => null
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100'
            ],
            'comment' => [
                'type' => 'TEXT',
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('blog_comments');
	}

	public function down()
	{
        $this->forge->dropTable('blog_comments');
	}
}
