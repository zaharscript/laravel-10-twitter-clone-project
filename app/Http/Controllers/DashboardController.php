<?php

namespace App\Http\Controllers;

use App\Models\tought;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class DashboardController extends Controller
{
    public function tought()
    {
        $tought = new tought([
            'content' => 'Lorem ipsum dolor',
        ]);
        $tought->save();

        /*  dump(tought::all()); retrieving all records from the
            tought table (using the all() method) and dumping the data to the screen for
            debugging purposes.
        */

        return view('dashboard', [
            'tought' => tought::orderBy('created_at', 'DESC')->paginate(3)
        ]);
    }
}
