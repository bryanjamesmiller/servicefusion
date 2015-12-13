<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Record;
use App\Http\Requests\UserRegistrationRequest;

class RecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Record::all();
        return view('records.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('records.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRegistrationRequest $request)
    {
        $input = $request->all();
        Record::create($input);
        session()->flash('flash_message', 'Record stored successfully.');
        return redirect('records');
    }

    /**
     * Display the specified resource.
     *
     * @param Record $record
     * @return \Illuminate\Http\Response
     */
    public function show(Record $record)
    {
        /*
        * I am able to include the Record $record parameter thanks to route-model-binding.
        * See RouteServiceProvider.php line with $router->model('records', 'App\Record');
        */
        return view('records.show', compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Record $record
     * @return \Illuminate\Http\Response
     */
    public function edit(Record $record)
    {
        return view('records.update', compact('record'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRegistrationRequest $request
     * @param Record $record
     * @return \Illuminate\Http\Response
     */
    public function update(UserRegistrationRequest $request, Record $record)
    {
        // The below line automatically gets the input::get('my_name') for each variable that is
        // set up for mass assignment in the Record model.
        $record->update($request->all());
        session()->flash('flash_message', 'Record updated successfully.');
        return redirect('records');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Record $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Record $record)
    {
        $num = $record->id;
        $record->delete();
        session()->flash('flash_message', 'Record #' . $num . ' deleted successfully.');
        return redirect('records');
    }
}
