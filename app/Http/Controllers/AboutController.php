<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index($id)
    {
        
        $pet = Pet::with('breed')->where('id', $id)->first();

        //relacionados
        $relations = Pet::with('breed')
                        ->where('breed_id', $pet->breed_id)
                        ->where('id', '<>', $pet->id)
                        ->limit(6)
                        ->get();
        //limit 6
        
        return view('site.about', [
            'pet' => $pet,
            'relations' => $relations
        ]);
    }
}
