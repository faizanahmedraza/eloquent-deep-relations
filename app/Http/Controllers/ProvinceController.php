<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function index()
    {
        return view('province.index');
    }

    public function addEmployee()
    {
        return view('province.add');
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
