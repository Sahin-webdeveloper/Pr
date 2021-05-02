<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPortfolioCategories extends Migration
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

        $this->forge->createTable('portfolio_categories');
	}

	public function down()
	{
        $this->forge->dropTable('portfolio_categories');
	}
}
