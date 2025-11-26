<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Filipe';
        $habits = ['Estudar', 'Ler', 'Programar'];

        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);
    }
}
