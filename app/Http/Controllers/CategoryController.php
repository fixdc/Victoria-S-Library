<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $ValidatedData['user_id'] = auth()->user()->id;

        Category::create($ValidatedData);

        return redirect('/dashboard/admin/addcategory')->with('success', 'Berhasil menambahkan User');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $categories = Category::all();

        return view('dashboard.admin.datacategory', [
            'categories' => $categories
        ]);
    }
    public function showadd(Category $category)
    {
        $categories = Category::all();

        return view('dashboard.admin.addcategory', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    public function editview($category_name)
    {
        $category = Category::where('category_name', $category_name)->first();
        return view('dashboard.admin.editcategory', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $category_name)
{
    // Validasi data yang diterima dari reque

    $category = Category::where('category_name', $category_name)->first();

    $request->validate([
        'category_name' => 'required' // unique rule untuk memastikan tidak ada duplikat
    ]);

    // Memperbarui nama kategori
    $category->category_name = $request->category_name;
    // Menyimpan perubahan ke database
    $category->save();

    // Redirect ke halaman yang ditentukan dengan pesan berhasil
    return redirect('/dashboard/admin/addcategory')->with('edit', 'Berhasil mengedit Kategori');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category_name)
{
    // Nonaktifkan kunci asing
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    Category::where('category_name', $category_name)->delete();
    // Aktifkan kembali kunci asing
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    return redirect('/dashboard/admin/addcategory')->with('delete', 'User deleted successfully.');
}
}
