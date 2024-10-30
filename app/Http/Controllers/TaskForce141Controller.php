<?php

namespace App\Http\Controllers;

use App\Models\tforce141;
use Illuminate\Http\Request;

class TaskForce141Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forces = tforce141::all();
        return view('PaviliunTaiping.tf141.index', compact('forces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'taskforce_id'=>'required',
        ]);


        tforce141::create([
            'taskforce_id'=>$request->taskforce_id,
            'name'=>$request->name,
            'initial'=>$request->initial,
            'gender'=>$request->gender,
            'rank'=>$request->rank,
            'role'=>$request->role,
            'status'=>$request->status
        ]);

        return redirect()->route('taskforce141.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $force = tforce141::find($id);

        if(!$force) {
            abort(404);
        }

        return view('PaviliunTaiping.tf141.show', ['force' => $force]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(tforce141 $tforce141)
    {
        return view('PaviliunTaiping.tf141.edit', compact('tforce141'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tforce141 = tforce141::find($id);
        $tforce141->update([
            'taskforce_id'=>$request->taskforce_id,
            'name'=>$request->name,
            'initial'=>$request->initial,
            'gender'=>$request->gender,
            'rank'=>$request->rank,
            'role'=>$request->role,
            'status'=>$request->status
        ]);

        return redirect()->route('taskforce141.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tforce141=tforce141::find($id);
        $tforce141->delete();
        return redirect()->route('taskforce141.index');
    }
}
