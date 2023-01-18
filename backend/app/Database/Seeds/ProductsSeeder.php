<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'product_name' => 'Walton Fridge',
                'product_details'    => 'jsdfgfdgh',
                'product_price'  => '50000',
                'product_catagory'  => 1,
            ],
            [
                'product_name' => 'Walton Mobile',
                'product_details'    => 'jsdfgfdgh',
                'product_price'  => '15000',
                'product_catagory'  => 2,
            ],
            [
                'product_name' => 'Walton TV',
                'product_details'    => 'jsdfgfdgh',
                'product_price'  => 2,
            ],
            [
                'product_name' => 'Walton Iron',
                'product_details'    => 'jsdfgfdgh',
                'product_price'  => '1000',
                'product_catagory'  => 2,
            ]
        ];


        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // Using Query Builder
        foreach ($datas as $data) {

            $this->db->table('products')->insert($data);
        }
    }
}
