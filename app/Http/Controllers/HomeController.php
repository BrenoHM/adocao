<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $pets = Pet::with('breed')->limit(10)->get();
        return view('site.home', [
            'pets' => $pets
        ]);
    }
}
