<?php

namespace App\Http\Controllers;

use App\Department;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function show()
    {
        $departments = Department::all();
        $data = compact('departments');
        return view('department.index', $data);
    }
}
