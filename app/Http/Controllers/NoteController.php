<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use Log;

class NoteController extends Controller
{
    public function index(Request $request)
    {
        $notes = Note::all();
        return view('page.note')
            ->with('active', 'note')
            ->with('header', 'โน้ตสากลเบื้องต้น')
            ->with('notes', $notes)
            ->with('cout', 1);
    }

    public function create(Request $request)
    {
        return view('page.createNote')
            ->with('active', 'note')
            ->with('header', 'โน้ตสากลเบื้องต้น');
    }

    public function add(Request $request)
    {
        $note = new Note;
        $note->name_note    = $request->name_note;
        $note->detail_note  = $request->detail_note;

        $note->save();

        Log::info('note->create->success : ' . $request->name_note);
        return redirect('note')
            ->with('status', 'success');
    }

    public function edit(Request $request)
    {

        if ($request->query('id')) {
            $note = Note::findOrFail($request->query('id'));
            return view('page.editNote')
                ->with('active', 'note')
                ->with('header', 'โน้ตสากลเบื้องต้น')
                ->with('note', $note);
        } else {
            return redirect('note');
        }
    }

    public function update(Request $request)
    {
        $note = Note::find($request->id);
        $note->name_note    = $request->name_note;
        $note->detail_note  = $request->detail_note;

        $note->save();
        Log::info('note->update->success : ' . $request->name_note);
        return redirect('note')
            ->with('status', 'success');
    }

    public function delete(Request $request)
    {
        // dd($request->query('edit'));
        $note = Note::find($request->query('id'));
        // dd($instrument->img_inst);

        $note->delete();

        Log::info('note->delete->success : id->' . $note->id);
        return redirect('note')
            ->with('status', 'success');
    }
}
