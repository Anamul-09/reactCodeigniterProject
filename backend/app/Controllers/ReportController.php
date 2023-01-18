<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use PhpParser\Node\Stmt\Echo_;

class ReportController extends BaseController
{

    // 3. Report Office wise stafflist
    #### From employees and offices table
    // firstName, lastName, email, city, country those are from USA

    public function stafflist()
    {
        $db = db_connect('query_builder');
        $builder = $db->table("offices");
        $data = $builder->get()->getResultArray();
        // dd($data);

        return view("reports/staff_list", ['offices' => $data]);
    }

    public function allstaff()
    {

        $code = $_GET['offcode'];
        $db = db_connect('query_builder');
        $builder = $db->table("employees");
        $builder->where('officeCode', $code);
        $data['empls'] = $builder->get()->getResultArray();
        // dd($data);
        return view('reports/off_staff_list', $data);
    }

    public function orderlist()
    {
        return view('reports/orders_list_form');
    }


    public function orderquery()
    {

        $start = $_GET['start'];
        $end = $_GET['end'];
        $db = db_connect('query_builder');
        $builder = $db->query("SELECT customerName, phone, city, orderNumber, orderDate, status FROM orders,customers where orders.customerNumber = customers.customerNumber AND orders.orderDate between '$start' AND '$end'");

        $data['orders'] = $builder->getResultArray();
        // dd($data);

        return view("reports/orders", $data);
    }
}
