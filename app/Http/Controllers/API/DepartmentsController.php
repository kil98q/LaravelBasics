<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;
use Illuminate\Http\Request;


class DepartmentsController extends Controller
{

    //Returns all departments from the database.
    //TODO Page limit requesting of all departments
    public function getDepartments(){
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
    public function postDepartment(Request $request){
        $department = new Department;
        $department->departmentName = $request->departmentName;
        $department->namePostman = $request->namePostman;
        $department->amountOfUsedCoffeeCups = intval($request->amountOfUsedCoffeeCups);

        //This casts the variables to the right type. for now this is a workaround but the model should do this automatically and its not working!
        //Todo proper way for autocasting forms
        if(is_bool($request->isCoffeeDrinkable)){
            $department->isCoffeeDrinkable = $request->isCoffeeDrinkable;
        }else{
            $department->isCoffeeDrinkable = false;
        }

        $department->save();
        return back();
    }
    public function deleteDepartment(Request $request)
    {
        Department::find($request->id)->delete();
        return back();
    }
}
