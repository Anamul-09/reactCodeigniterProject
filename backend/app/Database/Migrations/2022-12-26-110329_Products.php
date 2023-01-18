<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsinged' => 'true',
                'auto_incriment' => 'true'
            ],
            'product_name' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'unsinged' => 'true',
                'null' => 'false'
            ],
            'product_details' => [
                'type' => 'VARCHAR',
                'constraint' => '250',
                'unsinged' => 'true',
                'null' => 'true'
            ],
            'product_price' => [
                'type' => 'DECIMAL',
                'constraint' => '10, 2'

            ],
            'product_img' => [
                'type' => 'VARCHAR',
                'constraint' => 250,
                'null' => 'true'

            ],
            'product_catagory' => [
                'type' => 'TINYINT',



            ]
        ]);

        $this->forge->addKey("id", true);
        $this->forge->createTable("products");
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
