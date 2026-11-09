<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function bonjourGender($gender, $nom)
    {
        if ($gender == 'h') {
            $nom = "Mr " . $nom;
        } elseif ($gender == 'f') {
            $nom = "Miss " . $nom;
        } else {
            $nom =  $nom;
        }
        return view('bonjour', compact('nom'));
    }
}
