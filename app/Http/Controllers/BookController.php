<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Rent;
use App\Models\Category;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function addbook()
    {
        return view ('dashboard.petugas.addbook');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function books(Book $book)
    {
        
        $books = Book::with('category')->paginate(4);
        return view('homepage.index', compact('books'));

    }
    public function search(Request $request)
    {
        $query = $request->input('title');
        $categories = Category::all();

        // Lakukan pencarian berdasarkan 'title' dari tabel 'books'
        $books = Book::with('category')
                    ->where('title', 'like', '%' . $query . '%')
                    ->paginate(4);
    
        // Kirim data buku yang ditemukan ke view 'homepage.index'
        return view('homepage.index', [
            'categories' => $categories,
            'books' => $books]);
    }


    public function index(Request $request)
    {
        $booksQuery = Book::with('category');

        // Jika ada filter kategori
        if ($request->has('category')) {
            $booksQuery->whereHas('category', function ($query) use ($request) {
                $query->where('id', $request->category);
            });
        }
    
        $books = $booksQuery->paginate(4);
        $categories = Category::all(); // Ambil semua kategori
    
        return view('homepage.index', [
            'categories' => $categories,
            'books' => $books
        ]);
    }


    public function home(Book $book)
    {

        $books = Book::with('category')->paginate(3);
        return view ('home', [
            'books' => $books
        ]);

    }
    public function singlepost($slug)
    {
        $books = Book::where('slug', $slug)->first();
        // $books = Book::with('category')->get();
        return view ('homepage.singlebook', [
            'books' => $books
        ]);

    }
    public function show(Book $book)
    {

        $books = Book::with('category')->get();
        return view ('dashboard/petugas/databuku', [
            'books' => $books
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
