<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instruments;
use App\Note;

class DetailsController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('id')) {
            $instrument = Instruments::find($request->query('id'));
            return view('webpage.detailins')
                ->with('instrument', $instrument);
        } else {
            return back();
        }
    }

    public function note(Request $request)
    {
        if ($request->query('id')) {
            $note = Note::find($request->query('id'));
            return view('webpage.note')
                ->with('note', $note);
        } else {
            return back();
        }
    }
}
