<?php

namespace App\Http\Controllers;

use view;
use Illuminate\Http\Request;
use App\Models\Datas;

class DataController extends Controller
{
    public function dataview()
    {
        return view(
            'main',[
                'title'=>'crud',
                'datas'=> Datas::All()
            ]
        );
    }
    public function destroy($id)
    {
        $data = Datas::findOrFail($id);
        $data->delete();

        return redirect()->route('home');
    }

    public function updateview($id)
    {   
        $data = Datas::findOrFail($id);
        return view(
            'component.update',[
                'title'=>'crud',
                'data'=> $data
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $data = Datas::findOrFail($id);
        $data->nama = $request->input('nama');
        $data->profesi = $request->input('profesi');

        $data->save();
        return redirect()->route('home');
    }
}
