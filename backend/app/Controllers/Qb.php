<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpParser\Node\Stmt\Return_;

class Qb extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('products');
        $row = $builder->get();
        $data['products'] = $row->getResult();
        // echo "<pre>";
        // print_r($data);
        return view('test', $data);

        // Select field
        // $builder = $db->table('products')->select('id, product_name, product_price')->get(5, 1);
        // $data = $builder->getResult();
        // echo "<pre>";
        // print_r($data);


        // Select maximum price in price field
        // $builder = $db->table('products')->selectSum('product_price')->get();
        // $data = $builder->getResult();
        // echo "<pre>";
        // print_r($data);



        // Select sum in product_price in price field
        // $builder = $db->table('products')->selectSum('product_price')->get();
        // $data = $builder->getResult();
        // echo "<pre>";
        // print_r($data);

        // // Select sum in product_price in price field and groupBy product_category
        // $builder = $db->table('products')->select('product_catagory')->selectSum('product_price')->groupBy('product_catagory')->get();
        // $data = $builder->getResult();
        // echo "<pre>";
        // print_r($data);

        // Select sum in product_price in price field and Join product and category table product_category
        // $builder = $db->table('products');
        // $builder->join('categories', 'categories.id = products.product_catagory');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);


        // Select sum in product_price in price field and  product and category table product_category
        // $builder = $db->table('products,categories');
        // $builder->where('categories.id = products.product_catagory');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        //  where product and category table product_category
        //     $builder = $db->table('products');
        //     $builder->where('product_price > 250');
        //     $builder->where('product_price < 298');
        //     $builder->where('product_catagory >1');
        //     $data = $builder->get()->getResult();
        //     echo "<pre>";
        //     print_r($data);
    }
}
