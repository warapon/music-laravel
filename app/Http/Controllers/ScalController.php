<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Key;

class ScalController extends Controller
{
    public function index()
    {
        return view('webpage.scal')
            ->with('header', 'Scal');
    }
    public function show(Request $request)
    {

        if ($request->query('key') and $request->query('ins') and $request->query('x') and $request->query('y')) {
            $key = Key::where('name_key', $request->query('key'))
                ->where('intrument', $request->query('ins'))
                ->where('x', $request->query('x'))
                ->where('y', $request->query('y'))->first();

                return view('webpage.scalshow')
                ->with('header', 'Scal')
                ->with('key', $key);
        } else {
            return redirect('scal');
        }
    }
}
