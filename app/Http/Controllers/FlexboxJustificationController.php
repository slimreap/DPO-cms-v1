<?php

namespace App\Http\Controllers;
use App\Models\Flexbox_justification;
use Illuminate\Http\Request;

class FlexboxJustificationController extends Controller
{
    public function flexbox_justification()
    {
        $justification = Flexbox_justification::all();
        return response()->json($justification);
    }
}
