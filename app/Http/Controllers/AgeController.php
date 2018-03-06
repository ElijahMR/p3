<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function index() {
        return 'Show the form where the user can enter their birth date and select the type of output they want.';
    }

    public function calculateAge() {
        return 'Calculate the user\'s age according to the options they selected and then display the output.';
    }
}
