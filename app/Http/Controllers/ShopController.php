<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop.index');
    }

    public function addEmployee()
    {
        return view('shop.add');
    }

    public function addEmployeeData()
    {
        ///
    }

    public function updateEmployee()
    {
        ///
    }

    public function updateEmployeeData()
    {
        ///
    }
}
