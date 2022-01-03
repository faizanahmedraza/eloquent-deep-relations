<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return view('city.index');
    }

    public function addEmployee()
    {
        return view('city.add');
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
