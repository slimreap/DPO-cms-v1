<?php

namespace App\Http\Controllers;

use App\Models\ButtonStyle;
use Illuminate\Http\Request;

class AddButtonController extends Controller
{
    public function showButtonAttributes()
    {
        $btn = ButtonStyle::all();
        // dd($btn);
        // dd(response()->json($btn));
        // return view('components.dashboard.addbutton',[
        //     'buttonStyles' => $btn
        // ]);
        return response()->json($btn);
    }

}
