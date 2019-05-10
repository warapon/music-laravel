<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use Log;

class TestController extends Controller
{
    public function index()
    {
        return view('page.tests')
            ->with('active', 'test')
            ->with('header', 'แบบทดสอบ');
    }

    public function show($id)
    {
        $tests = Test::whereRaw('unit_id = ?', [$id])->get();
        return view('page.showtests')
            ->with('active', 'test')
            ->with('header', 'แบบทดสอบ')
            ->with('tests', $tests)
            ->with('count', 1)
            ->with('unit', $id);
    }

    public function create($id)
    {
        return view('page.createtests')
            ->with('active', 'test')
            ->with('header', 'เพิ่มแบบทดสอบ')
            ->with('unit', $id);
    }

    public function add(Request $request)
    {
        $test = new Test;
        $test->question = $request->question;
        $test->choice1 = $request->choice1;
        $test->choice2 = $request->choice2;
        $test->choice3 = $request->choice3;
        $test->choice4 = $request->choice4;
        $test->answer = $request->answer;
        $test->unit_id = (int)$request->unit_id;

        $test->save();

        Log::info('test->create->success : ' . $request->unit_id);
        return redirect('test/' . $request->unit_id)
            ->with('status', 'success');
    }

    public function dalete(Request $request, $id)
    {
        $test = Test::find($request->query('id'));

        $test->delete();

        Log::info('test->delete->success : id->' . $test->id);
        return redirect('test/' . $id)
            ->with('status', 'success');
    }
}
