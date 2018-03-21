<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function index() {
        return view('age.index');
    }

    public function calculateAge() {
        return 'Calculate the user\'s age according to the options they selected and then display the output.';
    }
}
