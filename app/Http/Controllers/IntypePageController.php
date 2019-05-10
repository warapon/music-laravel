<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument_Type;
use App\Instruments;

class IntypePageController extends Controller
{
    public function index($id)
    {
        $type = Instrument_Type::find($id);
        $instruments = Instruments::whereRaw('instument_type_has_instuments = ?', [$id])->get();
        return view('webpage.type')
        ->with('header',$type->name)
        ->with('instruments', $instruments)
        ->with('id',$id);
    }
}
