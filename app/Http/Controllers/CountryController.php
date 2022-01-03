<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        return view('country.index');
    }

    public function addEmployee()
    {
        return view('country.add');
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
