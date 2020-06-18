<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
use Illuminate\Validation\Rule;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $departments = Department::all();
        return view('departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->all();

        //validation
        $request->validate($this->validationRules());

        //save new department on database
        $department = new Department();
        /* $department->name = $data['name'];
        $department->descrizione = $data['descrizione']; */
        $department->fill($data);
        $saved = $department->save();
        //dd($saved);

        if ($saved) {
            $newDepartment = Department::find($department->id);
            return redirect()->route('departments.show', $newDepartment);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view('departments.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //$department = Department::find($id);
        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $data = $request->all();
        //validation
        $request->validate($this->validationRules($department->id));
        //dd($data);
        $update = $department->update($data);

        if ($update) {
            return redirect()->route('departments.show', $department->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    /* 
        Define validation rules
    */
    private function validationRules($id = null){
        return [
            'name' => [
            'required',
            'max:20',
            Rule::unique('departments')->ignore($id),
            ],

            'descrizione' => 'required'
        ];
    }
}
