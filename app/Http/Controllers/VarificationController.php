<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Varification;
use Illuminate\Http\Request;

class VarificationController extends Controller
{
    public function index() 
    {
        $data = Varification::all();
        $title = 'varification';
        return view('varification.varification', compact('data', 'title'));
    }

    public function detail($id)
    {
        $data = Varification::find($id);
        $title = 'detail-varification';
        return view('varification.detail', compact('data', 'title'));
    }

    // public function update(Request $request, $id)
    // {
    //     $data = Varification::find($id);
    //     $data->update($request->all());
    //     return redirect('/varification');
    // }

    public function varificate(Varification $varification){
        $user = User::where('id', $varification->user_id)->first();

        $user->update([
            'is_verified' => 1
        ]);

        return redirect('/varification');
    }
}
    