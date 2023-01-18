<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Catagory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsinged' => true,
                'auto_increment' => true
            ],
            'cat_name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',


            ]
        ]);

        $this->forge->addKey("id", true);
        $this->forge->createTable("catagories");
    }

    public function down()
    {
        $this->forge->dropTable('catagories');
    }
}
