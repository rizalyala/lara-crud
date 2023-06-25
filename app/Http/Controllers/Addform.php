<?php

namespace App\Http\Controllers;

use App\Models\Datas;
use Illuminate\Http\Request;

class Addform extends Controller
{
    public function formview()
    {
        return view(
            'component.add',[
                'title'=>'crud',
            ]
        );
    }

    public function postview(Request $request)
    {   
        $data = $request->validate([
            'nama' => 'required',
            'profesi' => 'required',
        ]);
        Datas::create($data);
        return redirect()->route('home');
        
    }
}
