<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Activedata extends BaseController
{
    public function index()
    {

        ####From employees table
        // 1. firstName, lastName, email those jobTitle are sales Rep-----------------

        // $db      = \Config\Database::connect('query_builder');
        // $builder = $db->table('employees')->select('firstName,lastName,email,jobTitle');
        // $data = $builder->where(array('jobTitle' => 'Sales Rep'));
        // $employees = $builder->get()->getResultArray();
        // echo "QUE. No-1 <br><pre>";
        // print_r($employees);
        // // return view('employees', $employees);


        // 2. firstName, lastName, email those jobTitle are sales Rep and reportsTo 1143-----------------

        // $db      = \Config\Database::connect('query_builder');
        // $builder = $db->table('employees')->select('firstName,lastName,email,jobTitle,reportsTo');
        // $builder->where(array('jobTitle' => 'Sales Rep'));
        // $builder->where(array('reportsTo' => '1143'));
        // $employees = $builder->get()->getResultArray();
        // echo "QUE. No-2 <br><pre>";
        // print_r($employees);



        // 3.#### From employees and offices table
        // firstName, lastName, email, city, country those are from USA

        // $db      = \Config\Database::connect('query_builder');
        // $builder = $db->table('employees,offices');
        // $builder->select('firstName, lastName, email, city, country');
        // $builder->where('employees.officeCode = offices.officeCode and offices.country = "USA"');
        // $employees = $builder->get()->getResult();
        // echo "QUE. No-3 <br><pre>";
        // print_r($employees);


        // 4.#### From orders, customers        with join
        // customerName, phone, city, orderNumber, orderDate, status

        // $db      = \Config\Database::connect('query_builder');
        // $builder = $db->table('orders');
        // $builder->select('customerName, phone, city, orderNumber,orderDate,status');
        // $builder->join('customers', 'customers.customerNumber = orders.customerNumber');
        // $employees = $builder->get()->getResult();
        // echo "QUE. No-4 <br><pre>";
        // print_r($employees);


        // 5.#### From orders, orderdetails and customers
        // customerName, phone, city, orderNumber, orderDate, status, quantityOrdered, priceEach

        //WITH wHERE
        // $db      = \Config\Database::connect('query_builder');
        // $builder = $db->table('orders,customers,orderdetails');
        // $builder->select('customerName, phone, city, orders.orderNumber,orderDate,status,quantityOrdered,priceEach');
        // $builder->where('orders.customerNumber  = customers.customerNumber');
        // $builder->where('orders.orderNumber = orderdetails.orderNumber');
        // $employees = $builder->get()->getResult();
        // echo "QUE. No-5 <br><pre>";
        // print_r($employees);

        //WITH jOIN
        // $db      = \Config\Database::connect('query_builder');

        // $builder = $db->table('orders');
        // $builder->select('customerName, phone, city, orders.orderNumber,orderDate,status,quantityOrdered,priceEach')->selectSum('quantityOrdered')->selectSum('priceEach')->groupBy('orders.orderNumber');;
        // $builder->join('customers', 'orders.customerNumber  = customers.customerNumber');
        // $builder->join('orderdetails', 'orders.orderNumber = orderdetails.orderNumber');

        // $employees = $builder->get()->getResult();
        // echo "QUE. No-5 <br><pre>";
        // print_r($employees);


        // 6.#### From orders, orderdetails, customers, products
        // SELECT customerName, city, orders.orderNumber, orderDate, products.productCode, productName, sum(quantityOrdered), sum(priceEach), MSRP
        // with Where
        // $db      = \Config\Database::connect('query_builder');
        // $builder = $db->table('orders,customers,orderdetails,products');
        // $builder->select('customerName, phone, city, orders.orderNumber,orderDate,products.productCode,productName,quantityOrdered,priceEach,MSRP');
        // $builder->where('orders.customerNumber  = customers.customerNumber');
        // $builder->where('orders.orderNumber = orderdetails.orderNumber');
        // $builder->where('products.productCode = orderdetails.productCode');

        // $employees = $builder->get()->getResult();
        // echo "QUE. No-6 <br><pre>";
        // print_r($employees);



        // with Join
        // $db      = \Config\Database::connect('query_builder');

        // $builder = $db->table('orders');
        // $builder->select('customerName, phone, city, orders.orderNumber,orderDate,products.productCode,productName,quantityOrdered,priceEach,MSRP')->selectSum('quantityOrdered')->selectSum('priceEach')->groupBy('orders.orderNumber');
        // $builder->join('customers', 'orders.customerNumber  = customers.customerNumber');
        // $builder->join('orderdetails', 'orders.orderNumber = orderdetails.orderNumber');
        // $builder->join('products', 'products.productCode = orderdetails.productCode');


        // $employees = $builder->get()->getResult();
        // echo "QUE. No-6 <br><pre>";
        // print_r($employees);



        // 7. Country wise order success summary

        $db      = \Config\Database::connect('query_builder');
        $builder = $db->table('orders,customers');
        $builder->select('customers.counrty');
        $builder->selectCount('orders.orderNumber', 'Total Orders');
        $builder->where('orders.customerNumber = customers.customerNumber');
        $builder->where('orders.status = "Shipped"');
        $builder->groupBy('customers.country');
    }
}
