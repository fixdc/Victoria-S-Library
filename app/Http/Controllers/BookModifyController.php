<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BookModifyController extends Controller
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
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'required|max:2048|mimes:png,jpg',
            'stok' => 'required',
            'body' => 'required|min:3',
        ]);
        
        // 1. AMBIL FILE NYA
        // 2. AMBIL EXTENSI FILE TERSEBUT (PNG, JPG, JPEG, DLL)
        // 3. BUAT NAMA FILE KITA SENDIRI
        // 4. DISIMPAN KE STORAGE
        // 5. DIKIRIM KE DATABASE

        if ($request->has('image')) {
            $imageBook = $request->file('image');
            $filename = Str::slug($request->title) . '.' . $imageBook->getClientOriginalExtension();
            $path = $imageBook->storeAs('image/buku', $filename);
            $ValidatedData['image'] = $path;
        }

        $ValidatedData['user_id'] = auth()->user()->id;

        Book::create($ValidatedData);

        return redirect('/dashboard/data-buku')->with('success', 'Berhasil menambahkan Post');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $books = Book::all(); // Fetch all users
        $category = Category::all();
        return view('dashboard.petugas.addbook', ['books' => $books,
        'category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    public function editview($slug)
    {
        $book = Book::where('slug', $slug)->first();
        $categories = Category::all();
        return view('dashboard.petugas.editbook', ['book' => $book, 'category' => $categories]);
        // $users = User::all(); // Fetch all users
        // return view('dashboard.admin.edituser', ['users' => $users]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $book = Book::where('slug', $slug)->first();
        $data = $request->validate([
            'image' => '',
            'title' => 'required',
            'body' => '',
            'category_id' => '',
        ]);

        // 1. AMBIL FILE NYA
        // 2. AMBIL EXTENSI FILE TERSEBUT (PNG, JPG, JPEG, DLL)
        // 3. BUAT NAMA FILE KITA SENDIRI
        // 4. DISIMPAN KE STORAGE
        // 5. DIKIRIM KE DATABASE

        $gambarSebelumnya = $book->image;

        if ($request->hasFile('image')) {
            if ($gambarSebelumnya) {
                Storage::delete($gambarSebelumnya);
            }

            $file = $request->file('image');
            $extensi = $file->getClientOriginalExtension();
            $namaFile = Str::slug($request->title) . '.' . $extensi;
            $path = $file->storeAs('image/buku', $namaFile);
            $book->image = $path;
        }

        $book->title = $request->title;
        $book->body = $request->body;
        $book->category_id = $request->category_id;
        $book->slug = null;
        $book->update();

        return redirect('/dashboard/data-buku')->with('edit', 'Berhasil mengedit Buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $book = Book::where('slug', $slug)->first();
        $gambarSebelum = $book->image;
        if ($gambarSebelum) {
            Storage::delete($gambarSebelum);
        }
        
        $book->delete();
        return redirect('/dashboard/data-buku')->with('delete', 'User deleted successfully.');
    }
}
