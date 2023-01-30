<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;


class DepartmentsController extends Controller
{

    //Returns all departments from the database.
    //TODO Page limit requesting of all departments
    public function getDepartments()
    {
        return Department::all();
    }

    //Gets specific department obj from the database
    public function getDepartment($id)
    {
        return Department::find($id);
    }

    //adds the given department data to the database given its valid.

    /**
     * @param Request $request
     * @return mixed
     */
    public function postDepartment(Request $request)
    {
        $department = new Department;
        $department->department_name = $request->get('departmentName');
        $department->name_postman = $request->get('namePostman');
        $department->amount_of_used_coffee_cups = (int)$request->get('amountOfUsedCoffeeCups');

        $department->is_coffee_drinkable = $request->boolean('isDrinkableCoffee') === true;

        $department->save();

        return back();
    }
    public function deleteDepartment(Request $request)
    {
        Department::find($request->get('id'))?->delete();

        return back();
    }
}
