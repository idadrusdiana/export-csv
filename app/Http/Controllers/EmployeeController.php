<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Exports\EmployeeExport;
use Excel;

class EmployeeController extends Controller
{
    public function addEmployee()
    {
        $employees = [
            ["name" => "Idad", "email"=>"idad@gmail.com", "phone"=>"0896229382221", "salary"=>"20000", "department"=>"Backend Developer"],  
            ["name" => "Gagah", "email"=>"gagah@gmail.com", "phone"=>"0896229382222", "salary"=>"21000", "department"=>"UI/UX"],  
            ["name" => "Fathin", "email"=>"fathin@gmail.com", "phone"=>"0896229382223", "salary"=>"22000", "department"=>"Fullstack"],  
            ["name" => "Rofi", "email"=>"rofi@gmail.com", "phone"=>"0896229382224", "salary"=>"23000", "department"=>"Frontend Developer"],  
            ["name" => "Teh Cici", "email"=>"tehcici@gmail.com", "phone"=>"0896229382225", "salary"=>"24000", "department"=>"Marketting"],  
            ["name" => "Teh Dini", "email"=>"tehdini@gmail.com", "phone"=>"0896229382226", "salary"=>"25000", "department"=>"Marketting"],  
        ];
        Employee::insert($employees);
        return "Record are inserted"; 
    }

    public function exportIntoExcel()
    {
        return Excel::download(new EmployeeExport, 'employeelist.xlsx');
    }

    public function exportIntoCSV()
    {
        return Excel::download(new EmployeeExport, 'employeelist.csv');
    }
}
