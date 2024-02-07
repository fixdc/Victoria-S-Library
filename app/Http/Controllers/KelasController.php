<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function show(Kelas $kelas)
    {
        $kelas = Kelas::all();

        return view('dashboard.admin.datakelas', [
            'kelas' => $kelas
        ]);
    }

    public function showadd(Kelas $kelas)
    {
        $kelas = Kelas::all();

        return view('dashboard.admin.addkelas', [
            'kelas' => $kelas
        ]);
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $ValidatedData['user_id'] = auth()->user()->id;

        Kelas::create($ValidatedData);

        return redirect('/dashboard/admin/kelas')->with('success', 'Berhasil menambahkan User');
    }
    public function destroy($name)
{
    // Nonaktifkan kunci asing
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    Kelas::where('name', $name)->delete();
    // Aktifkan kembali kunci asing
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    return redirect('/dashboard/admin/kelas')->with('delete', 'User deleted successfully.');
}
public function editview($name)
{
    $kelas = Kelas::where('name', $name)->first();
    return view('dashboard.admin.editkelas', ['kelas' => $kelas]);
}
public function update(Request $request, $name)
{
    // Validasi data yang diterima dari reque

    $kelas = Kelas::where('name', $name)->first();

    $request->validate([
        'name' => 'required' // unique rule untuk memastikan tidak ada duplikat
    ]);

    // Memperbarui nama kategori
    $kelas->name = $request->name;
    // Menyimpan perubahan ke database
    $kelas->save();

    // Redirect ke halaman yang ditentukan dengan pesan berhasil
    return redirect('/dashboard/admin/kelas')->with('edit', 'Berhasil mengedit Kategori');
}
}
