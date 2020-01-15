<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fumetti;

class FumettiController extends Controller
{
    //

    public function index() {

        $fumetti = Fumetti::all();

        return view("pages.fumetti", compact("fumetti"));
    }

}
