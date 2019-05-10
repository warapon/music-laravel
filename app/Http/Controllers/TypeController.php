<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Instrument_Type;
use Illuminate\Http\Request;
use Response;
use Log;

class TypeController extends Controller
{

    public function index()
    {
        $instrument_types = Instrument_Type::all();
        return view('page.instrumentType')
            ->with('active', 'type')
            ->with('header', 'ประเภทเครื่องดนตรี')
            ->with('types', $instrument_types)
            ->with('cout', 1);
    }

    public function create(Request $request)
    {
        $instrument_type = new Instrument_Type;

        $instrument_type->name = $request->name_type;

        if ($instrument_type->save()) {
            Log::info('type->create->success : ' . $request->name_type);
            // return Redirect::back()->with('massage', 'success');
            return response()->json($instrument_type);
        } else {
            return response::json(array('errors' => $instrument_type->getMessageBag()->toarray()));
            error_log('error');
            // return Redirect::back()->with('massage', 'error');
        }
    }

    public function update(Request $request)
    {
        // error_log($request->name_type);
        $instrument_type = Instrument_Type::find($request->id_type);
        $instrument_type->name = $request->name_type;
        if ($instrument_type->save()) {
            Log::info('type->update->success : '.$request->name_type);
            return response()->json($instrument_type);
        } else {
            return response::json(array('errors'=>$instrument_type->getMessageBag()->toarray()));
        }
    }

    public function delete(Request $request)
    {
        $instrument_type = Instrument_Type::find($request->id_type_delete);
        if ($instrument_type->delete()) {
            Log::info('type->delete->success : id->'.$request->id_type_delete);
            return response()->json();
        } else {
            return response::json(array('errors'=>$instrument_type->getMessageBag()->toarray()));
        }
    }
}
