<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function home()
    {
        $data = User::get();
        $datalenght = count($data);
        for ($i = 0; $i < $datalenght; $i++) {
            $value = $data[$datalenght - 1]->name;
        }
        // dd($value);
        return view('main', compact('value'));
    }
    public function form()
    {
        return view('form');
    }
    public function formdata(Request $req)
    {
        // if($req->name == "")
        $data = new User();
        $data->name = $req->name;
        $data->save();

        return redirect()->route("home");
    }
}
