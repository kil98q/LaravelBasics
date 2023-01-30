<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeesController extends Controller
{

    //Returns all employees from the database.
    //TODO Page limit requesting of all departments
    public function getEmployees()
    {
        return Employee::all();
    }

    //Gets specific employee from the database
    public function getEmployee($id)
    {
        return Employee::find($id);
    }

    //Gets specific employee from the database
    public function getColleagues($id)
    {
        return Employee
            ::whereIn('department_id', Employee::where('id', $id)->select('department_id'))
            ->whereNot('id', $id)
            ->get();
    }

    //adds the given department data to the database given its valid.

    /**
     * @param Request $request
     * @return mixed
     */
    public function postEmployees(Request $request)
    {
        $employee = new Employee();
        $employee->employee_name = $request->get('employeeName');
        $employee->department_id = (int)$request->get('departmentId');

        $employee->save();

        return back();
    }

    public function deleteEmployee(Request $request)
    {
        Employee::where('id', $request->id)->delete();

        return back();
    }
}
