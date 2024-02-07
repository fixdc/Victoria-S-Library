<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Str;
use App\Models\Kelas;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AddUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.admin.createuser', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|max:255',
            'id_kelas' => 'required',
            'username' => 'required|min:3|max:255|unique:users',
            'role_id' => 'required',
            'password' => 'required'
        ]);

        if($request->file('image')){
            $ValidatedData['image']= $request->file('image')->store('post-images');
        }

        $ValidatedData['user_id'] = auth()->user()->id;

        User::create($ValidatedData);

        return redirect('/dashboard/data-user')->with('success', 'Berhasil menambahkan User');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
    $users = User::all(); // Fetch all users
    $kelas = Kelas::all();
    return view('dashboard.admin.createuser', ['users' => $users,
'kelas' => $kelas]);
    }
    public function editview($slug)
    {
        $user = User::where('slug', $slug)->first();
        $classes = Kelas::all();
        return view('dashboard.admin.edituser', ['user' => $user, 'classes' => $classes]);
    // $users = User::all(); // Fetch all users
    // return view('dashboard.admin.edituser', ['users' => $users]);
    }

    public function update(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->first();
        $data = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'id_kelas' => '',
            'role_id' => '',
        ]);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->id_kelas = $request->id_kelas;
        $user->role_id = $request->role_id;
        $user->slug = null;
        $user->update();

        return redirect('/dashboard/data-user')->with('edit', 'Berhasil mengedit User');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(User $user)
    // {
    //     User::destroy($user->id);
    //     return redirect('/dashboard/datauser')->with('delete', 'Berhasil menghapus Post'); 
    // }
    public function destroy($slug)
{
    // Nonaktifkan kunci asing
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    User::where('slug', $slug)->delete();
    // Aktifkan kembali kunci asing
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    return redirect('/dashboard/data-user')->with('delete', 'User deleted successfully.');
}
    public function editpassview($slug)
    {
        return view('dashboard.admin.editpassword',[
            'userSlug' => $slug,
        ]);
    }

    public function editpass(Request $request, $slug)
    {
        $user = User::where('slug', $slug)->first();

        $validated = $request->validate([
            'password' => 'required'
        ]);

        $validated['password'] =Hash::make($validated['password']);

        $user->update($validated);

        return redirect('/dashboard/data-user');
    }
}
