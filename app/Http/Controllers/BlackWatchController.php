<?php

namespace App\Http\Controllers;

use App\Models\BlackWatch;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class BlackWatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blackwatch = BlackWatch::all();
        return view('PaviliunTaiping.BlackWatch.index', compact('blackwatch'));
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
            'blackwatch_id'=>'required',
        ]);


        BlackWatch::create([
            'blackwatch_id'=>$request->blackwatch_id,
            'name'=>$request->name,
            'initial'=>$request->initial,
            'gender'=>$request->gender,
            'rank'=>$request->rank,
            'role'=>$request->role,
            'status'=>$request->status
        ]);

        return redirect()->route('blackwatch.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blackwatch = BlackWatch::find($id);

        if(!$blackwatch) {
            abort(404);
        }

        return view('PaviliunTaiping.BlackWatch.show', ['blackwatch' => $blackwatch]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlackWatch $blackwatch)
    {
        return view('PaviliunTaiping.BlackWatch.edit', compact('blackwatch'));
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
        $blackwatch=BlackWatch::find($id);
        $blackwatch->update([
            'blackwatch_id'=>$request->blackwatch_id,
            'name'=>$request->name,
            'initial'=>$request->initial,
            'gender'=>$request->gender,
            'rank'=>$request->rank,
            'role'=>$request->role,
            'status'=>$request->status
        ]);

       return redirect()->route('blackwatch.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blackwatch=BlackWatch::find($id);
        $blackwatch->destroy($id);
        return redirect()->route('blackwatch.index');
    }


}
