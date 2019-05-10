<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Key;
use Log;

class TeachingController extends Controller
{
    public function index()
    {
        return view('page.theory')
            ->with('active', 'theory')
            ->with('header', 'ทฤษฎีดนตรีสากลขั้นสูง');
    }

    public function show(Request $request)
    {
        $key = Key::where('x', $request->query('x'))->where('y', $request->query('y'))->first();
        return view('page.show')
            ->with('active', 'theory')
            ->with('header', 'ทฤษฎีดนตรีสากลขั้นสูง')
            ->with('key', $key)
            ->with('name_key', $request->query('key'))
            ->with('intrument', $request->query('ins'))
            ->with('x', $request->query('x'))
            ->with('y', $request->query('y'));
    }

    public function add(Request $request)
    {
        if ($request->file('sound_key') or $request->file('img_key') or $request->url_key) {
            $key = new Key;
            $key->name_key      =   $request->name_key;
            $key->intrument     =   $request->intrument;
            $key->x             =   $request->x;
            $key->y             =   $request->y;
            if ($request->file('sound_key')) {
                $this->validate($request, [
                    'sound_key' => 'mimes:audio/mpeg,mpga,mp3,wav',
                ]);

                $filename_sound = $request->file('sound_key');
                $rename_sound = "sound_key" . date('Y-m-d') . time() . rand(11111, 99999) . '.' . $filename_sound->getClientOriginalExtension();
                $key->sound = $rename_sound;
                $filename_sound->move(public_path("images/uploads/sound"), $rename_sound);
            } else {
                $key->sound = '';
            }
            if ($request->file('img_key')) {
                $this->validate($request, [
                    'img_key'     =>  'required|image|mimes:jpeg,png,jpg|max:2048'
                ]);

                $filename_img = $request->file('img_key');
                $rename_img = "img_key" . date('Y-m-d') . time() . rand(11111, 99999) . '.' . $filename_img->getClientOriginalExtension();
                $key->img = $rename_img;
                $filename_img->move(public_path("images/uploads/key"), $rename_img);
            } else {
                $key->img = '';
            }
            if ($request->url_key) {
                $key->url_video    = $request->url_key;
            } else {
                $key->url_video    = '';
            }


            $key->save();

            Log::info('key->create->success : ' . $request->name_key . ' intrument : ' . $request->intrument);
            return redirect('theory')
                ->with('status', 'success');
        } else {
            Log::warning('key->create->warning : ' . $request->name_key . ' intrument : ' . $request->intrument);
            return back()
                ->with('status', 'warning');
        }
    }

    public function update(Request $request)
    {
            $key = Key::find($request->id);

            if ($request->file('sound_key') or $request->file('img_key') or $request->url_key) {
                if ($request->file('sound_key')) {
                    $this->validate($request, [
                        'sound_key' => 'mimes:audio/mpeg,mpga,mp3,wav',
                    ]);
                    unlink(public_path("images/uploads/sound/" . $request->sound_old));
                    $filename_sound = $request->file('sound_key');
                    $rename_sound = "sound_key" . date('Y-m-d') . time() . rand(11111, 99999) . '.' . $filename_sound->getClientOriginalExtension();
                    $key->sound = $rename_sound;
                    $filename_sound->move(public_path("images/uploads/sound"), $rename_sound);
                }
                if ($request->file('img_key')) {
                    $this->validate($request, [
                        'img_key'     =>  'required|image|mimes:jpeg,png,jpg|max:2048'
                    ]);
                    unlink(public_path("images/uploads/key/" . $request->img_old));
                    $filename_img = $request->file('img_key');
                    $rename_img = "img_key" . date('Y-m-d') . time() . rand(11111, 99999) . '.' . $filename_img->getClientOriginalExtension();
                    $key->img = $rename_img;
                    $filename_img->move(public_path("images/uploads/key"), $rename_img);
                }
                if ($request->url_key) {
                    $key->url_video    = $request->url_key;
                }
    
    
                $key->save();
    
                Log::info('key->create->success : ' . $request->name_key . ' intrument : ' . $request->intrument);
                return redirect('theory')
                    ->with('status', 'success');
            } else {
                Log::warning('key->create->warning : ' . $request->name_key . ' intrument : ' . $request->intrument);
                return back()
                    ->with('status', 'warning');
            }
    }
}
