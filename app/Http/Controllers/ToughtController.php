<?php

namespace App\Http\Controllers;

use App\Models\tought;
use Illuminate\Http\Request;

class ToughtController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tought' => 'required|min:1|max:240'
        ]);
        $tought = new tought([
            'content' => request()->get('tought', ''),
        ]);
        $tought->save();

        return redirect()->route('index')->with('success', 'tought created successfully!');
    }
}
