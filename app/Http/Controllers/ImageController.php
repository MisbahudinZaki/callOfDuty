<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlackWatch;
use Storage;

class ImageController extends Controller
{

    public function update(Request $request, $id)
    {

    $photo = $request->file('image');
    $filename = date('Y-m-d').$photo->getClientOriginalName();
    $path = 'blackwatch/'.$filename;



    Storage::disk('public')->put($path, file_get_contents($photo));

    $foto['image'] = $filename;

    BlackWatch::whereId($id)->update($foto);

    return redirect()->route("blackwatch.index");
    }
}