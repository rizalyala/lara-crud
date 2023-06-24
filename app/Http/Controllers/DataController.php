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
                'datas'=> Datas::all()
            ]
        );
    }
}
