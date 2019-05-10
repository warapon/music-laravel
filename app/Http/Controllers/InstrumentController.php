<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Instrument_Type;
use App\Instruments;
use Illuminate\Http\Request;
use Response;
use Log;

class InstrumentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('id')) {
            $type = Instrument_Type::find($request->query('id'));
            $instruments = Instruments::whereRaw('instument_type_has_instuments = ?', [$request->query('id')])->get();
            return view('page.instrument')
                ->with('active', 'type')
                ->with('header', 'เครื่องดนตรีประเภท' . $type->name)
                ->with('cout', 1)
                ->with('instruments', $instruments);
        } else {
            return redirect('instype');
        }
    }

    public function create(Request $request)
    {
        if ($request->query('id')) {
            $type = Instrument_Type::find($request->query('id'));
            $instruments = Instruments::whereRaw('instument_type_has_instuments = ?', [$request->query('id')])->get();
            return view('page.createInstrument')
                ->with('active', 'type')
                ->with('header', 'เครื่องดนตรีประเภท' . $type->name)
                ->with('cout', 1)
                ->with('instruments', $instruments);
        } else {
            return redirect('instype');
        }
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'img_pro'     =>  'required|image|mimes:jpeg,png,jpg|max:2048',
            'img_instrumen'     =>  'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $filename_pro = $request->file('img_pro');
        $rename_pro = "img_pro" . date('Y-m-d') . time() . rand(11111, 99999) . '.' . $filename_pro->getClientOriginalExtension();

        $filename_instrumen = $request->file('img_instrumen');
        $rename_instrumen = "img_instrumen" . date('Y-m-d') . time() . rand(11111, 99999) . '.' . $filename_instrumen->getClientOriginalExtension();

        $instrument = new Instruments;
        $instrument->instument_type_has_instuments = (int)$request->id;
        $instrument->name_th_inst = $request->name_th_instrumen;
        $instrument->name_en_inst = $request->name_en_instrumen;
        $instrument->detail_inst = $request->detail_instrumen;
        $instrument->url_inst = $request->vedio_instrumen;
        $instrument->img_pro = $rename_pro;
        $instrument->img_inst = $rename_instrumen;

        $instrument->save();

        $filename_pro->move(public_path("images/uploads/pro"), $rename_pro);
        $filename_instrumen->move(public_path("images/uploads/instrument"), $rename_instrumen);
        Log::info('instument->create->success : ' . $request->name_th_instrumen);
        return redirect('instype/instument?id=' . $request->id)
            ->with('status', 'success');
    }

    public function edit(Request $request)
    {

        if ($request->query('id')) {
            $type = Instrument_Type::find($request->query('id'));
            $instruments = Instruments::whereRaw('id = ?', [$request->query('edit')])->get();;
            $instruments = Instruments::findOrFail($request->query('edit'));
            return view('page.editInstrument')
                ->with('active', 'type')
                ->with('header', 'เครื่องดนตรีประเภท' . $type->name)
                ->with('instrument', $instruments);
        } else {
            return redirect('instype');
        }
    }

    public function update(Request $request)
    {
        if ($request->file('img_pro') or $request->file('img_instrumen')) {
            $instrument = Instruments::find($request->id);
            $instrument->name_th_inst = $request->name_th_instrumen;
            $instrument->name_en_inst = $request->name_en_instrumen;
            $instrument->detail_inst = $request->detail_instrumen;
            $instrument->url_inst = $request->vedio_instrumen;

            if ($request->file('img_pro')) {
                $this->validate($request, [
                    'img_pro'     =>  'required|image|mimes:jpeg,png,jpg|max:2048'
                ]);
                unlink(public_path("images/uploads/pro/" . $request->img_p));
                $filename_pro = $request->file('img_pro');
                $rename_pro = "img_pro" . date('Y-m-d') . time() . rand(11111, 99999) . '.' . $filename_pro->getClientOriginalExtension();
                $filename_pro->move(public_path("images/uploads/pro"), $rename_pro);
                $instrument->img_pro = $rename_pro;
            }

            if ($request->file('img_instrumen')) {
                $this->validate($request, [
                    'img_instrumen'     =>  'required|image|mimes:jpeg,png,jpg|max:2048'
                ]);
                unlink(public_path("images/uploads/instrument/" . $request->img_i));
                $filename_instrumen = $request->file('img_instrumen');
                $rename_instrumen = "img_instrumen" . date('Y-m-d') . time() . rand(11111, 99999) . '.' . $filename_instrumen->getClientOriginalExtension();
                $filename_instrumen->move(public_path("images/uploads/instrument"), $rename_instrumen);
                $instrument->img_inst = $rename_instrumen;
            }       

            $instrument->save();
            Log::info('instrument->update->success : ' . $request->name_th_instrumen);
            return redirect('instype/instument?id=' . $request->type_id)
                ->with('status', 'success');
        } else {
            $instrument = Instruments::find($request->id);
            $instrument->name_th_inst = $request->name_th_instrumen;
            $instrument->name_en_inst = $request->name_en_instrumen;
            $instrument->detail_inst = $request->detail_instrumen;
            $instrument->url_inst = $request->vedio_instrumen;

            $instrument->save();

            Log::info('instrument->update->success : ' . $request->name_th_instrumen);
            return redirect('instype/instument?id=' . $request->type_id)
                ->with('status', 'success');
        }
    }

    public function delete(Request $request)
    {
        // dd($request->query('edit'));
        $instrument = Instruments::find($request->query('edit'));
        // dd($instrument->img_inst);
        unlink(public_path("images/uploads/pro/" . $instrument->img_pro));
        unlink(public_path("images/uploads/instrument/" . $instrument->img_inst));

        $instrument->delete();

        Log::info('instrument->delete->success : id->' . $instrument->id);
        return redirect('instype/instument?id=' . $request->query('id'))
            ->with('status', 'success');
    }
}
