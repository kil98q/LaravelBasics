<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;
use Illuminate\Http\Request;


class EmployeesController extends Controller
{

    //Returns all employees from the database.
    //TODO Page limit requesting of all departments
    public function getEmployees(){
        return Employee::all();
    }

    //Gets specific employee from the database
    public function getEmployee($id){
        return Employee::find($id);
    }

    //adds the given department data to the database given its valid.

    /**
     * @param Request $request
     * @return mixed
     */
    public function postEmployees(Request $request){
        $Employee = new Employee();
        $Employee->employeeName = $request->employeeName;
        $Employee->departmentId = intval($request->departmentId);

        $Employee->save();
        return back();
    }
    public function deleteEmployee(Request $request){
        Employee::find($request->id)->delete();
        return back();
    }
}
