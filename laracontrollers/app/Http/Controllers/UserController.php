<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.index', compact('users'));
    }
    // Show the form for creating a new resource.
    public function create(){
        $user = new User;
        $user->name = "Alison";
        $user->email = "alison@example.com";
        $user->password = Hash::make('1234567');
        $user->age = 25;
        $user->address = "Calle A";
        $user->zip_code = 290909;
        $user->save();

        User::create([
            'name' => 'Carlos',
            'email' => 'carlos@mail.com',
            'password' => Hash::make('123456'),
            'age' => 40,
            'address' => 'Calle B',
            'zip_code' => '280808',
        ]);

        User::create([
            'name' => 'Andres',
            'email' => 'andres@mail.com',
            'password' => Hash::make('123456'),
            'age' => 26,
            'address' => 'Calle C',
            'zip_code' => '270707',
        ]);

        return redirect()->route("user.index");
    }
}
