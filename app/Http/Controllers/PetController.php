<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PetController extends Controller
{
    public function index()
    {
        $pets = Pet::with('breed')->where('user_id', Auth::id())->get();

        return Inertia::render('Pet/Index', [
            'pets' => $pets
        ]);
    }

    public function create()
    {
        return Inertia::render('Pet/Create', []);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'breed_id' => 'required',
            'color' => 'required',
            'phone' => 'required',
            'birthday' => 'required|before_or_equal:now',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ],[
            'birthday.before_or_equal' => 'O campo data deve ser uma data anterior ou igual a hoje.'
        ]);

        $data = $request->all();

        $data['user_id'] = Auth::id();

        if( $request->photo ){
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move('photos', $imageName);
            $data['photo'] = $imageName;
        }

        Pet::create($data);

        //Inertia::share('message', "Cadastrado com sucesso!");
        //$request->session('message', "Cadastrado com sucesso!");
        //$request->session()->put('message', 'Cadastrado com sucesso!');
        
        return Redirect::route('pet.index')->with('message', 'Cadastrado com sucesso!');
    }

    public function edit(Pet $pet)
    {
        return Inertia::render('Pet/Edit', [
            'pet' => $pet,
            'action' => 'Editar'
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'breed_id' => 'required',
            'color' => 'required',
            'phone' => 'required',
            'birthday' => 'required|before_or_equal:now',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ],[
            'birthday.before_or_equal' => 'O campo data deve ser uma data anterior ou igual a hoje.'
        ]);

        $pet = Pet::where('id', $id);
        
        $builderPet = $pet->first();

        $data = $request->except('photo');

        if( $request->photo ){
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move('photos', $imageName);
            $data['photo'] = $imageName;

            if(file_exists('photos/' . $builderPet->photo)) {
                unlink('photos/'. $builderPet->photo);
            }
        }

        $pet->update($data);

        return Redirect::route('pet.index')->with('message', 'Atualizado com sucesso!');

    }

    public function destroy($id)
    {
        Pet::where('id', $id)->delete();
        return Redirect::route('pet.index')->with('message', 'Deletado com sucesso!');
    }
}
