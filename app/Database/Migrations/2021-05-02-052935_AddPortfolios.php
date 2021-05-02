<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPortfolios extends Migration
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
            'path' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],
            'portfolio_category_id' => [
                'type' => 'INT',
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('portfolios');
	}

	public function down()
	{
        $this->forge->dropTable('portfolios');
	}
}
