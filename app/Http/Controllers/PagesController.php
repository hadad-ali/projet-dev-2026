<?php

namespace App\Http\Controllers;

use App\Models\User;

class PagesController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function bonjour()
    {
        return view('bonjour');
    }

    public function bonjourNom($nom)
    {
        return view('bonjour', compact('nom'));
    }

    public function bonjourGender($gender, $nom)
    {
        if ($gender == 'h') {
            $nom = 'Mr '.$nom;
        } elseif ($gender == 'f') {
            $nom = 'Miss '.$nom;
        } else {
            $nom = $nom;
        }

        return view('bonjour', compact('nom'));
    }

    public function list()
    {
        $users = User::all();

        return view('list-users'
        ,compact('users'));
    }
}
