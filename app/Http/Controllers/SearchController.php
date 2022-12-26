<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use App\Models\Pet;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        
        $pets = Pet::query()->with('breed');

        if( $request->name ) {
            $pets->where('name', 'like', "%$request->name%");
        }

        if( $request->breed_id ) {
            $pets->where('breed_id', $request->breed_id);
        }

        if( $request->color ) {
            $pets->where('color', $request->color);
        }

        $pets = $pets->paginate(12);

        $breeds = Breed::all();
        
        return view('site.search', [
            'pets' => $pets,
            'breeds' => $breeds
        ]);
    }
}
