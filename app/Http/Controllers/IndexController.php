<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tought;
use Symfony\Component\VarDumper\VarDumper;

class IndexController extends Controller
{
    public function index()
    {

        /*  dump(tought::all()); retrieving all records from the
            tought table (using the all() method) and dumping the data to the screen for
            debugging purposes.
        */

        return view('index', [
            'tought' => tought::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
