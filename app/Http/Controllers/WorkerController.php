<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Worker;
use Illuminate\Validation\Rule; //ho prolemi con le validation rule

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $workers = Worker::all();
        //dd($workers);
        return view('workers.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workers.create');
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

        /* 
        non funziona con validation BadMethodCallException
        Method App\Http\Controllers\WorkerController::validationRules does not exist. 
        */
        $request->validate($this->validationRules());

        //save new department on database
        $worker = new Worker();
        /* $department->name = $data['name'];
        $department->descrizione = $data['descrizione']; */
        $worker->fill($data);
        $saved = $worker->save();
        //dd($saved);

        if ($saved) {
            $newworker = Worker::find($worker->id);
            return redirect()->route('workers.show', $newworker);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Worker $worker)
    {
        return view('workers.show', compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Worker $worker)
    {
        return view('workers.edit', compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Worker $worker)
    {
        $data = $request->all();
        //validation
        $request->validate($this->validationRules($worker->id));
        //dd($data);
        $update = $worker->update($data);

        if ($update) {
            return redirect()->route('workers.show', $worker->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Worker $worker)
    {
        $ref = $worker->name;
        $deleted = $worker->delete();

        //redirect with session data

        if ($deleted) {
            return redirect()->route('workers.index')->with('deleted', $ref);
        }
    }

    /* 
        Define validation rules
    */
    private function validationRules($id = null){
        return [
            'name' => [
            'required',
            'max:25',
            Rule::unique('departments')->ignore($id),
            ],

            'gender' => 'required',
            'descrizione' => '',
            'age' => 'required',

        ];
    }
}
