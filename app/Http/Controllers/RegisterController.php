<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Kelas;
class RegisterController extends Controller
{
    public function register(){

        $kelas =Kelas::all();
        return view('register', [
            'title' => 'register',
            'active' => 'register',
            'kelas' => $kelas
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'id_kelas' => 'required',
            'username' => 'required|min:3|max:255|unique:users,username',
            'password' => 'required',
            
        ]);

        
        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['role_id'] = 3;
        
        User::create($validatedData);


        // $request->session()->flash('status','Please login');

        return redirect('login')->with('success','Please login');
    }
}
