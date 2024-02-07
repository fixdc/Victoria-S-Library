<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;


class RentController extends Controller
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

    public function pdf()
    {
    	$rents = Rent::all();
 
    	$pdf = Pdf::loadview('dashboard.petugas.pdf',['rents'=>$rents]);
    	return $pdf->download('laporan-peminjaman.pdf');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store($title)
    {
        $book = Book::where('title', $title)->firstOrFail();

        $user = Auth::user();

        
        $existingRent = Rent::where('book', $book->title)
        ->where('user_id', $user->id)
        ->where('status', 'Di Pinjam')
        ->first();
        
        if ($existingRent) {
            return back()->with('renterror', 'Anda sudah meminjam buku ini.');
        }
        
        if ($book->stok > 0) {
            
            $rent = new Rent();
            $rent->image = $book->image;
            $rent->tgl_pinjam = new Carbon();
            $rent->book = $book->title;
            $rent->user = $user->name;
            $rent->tgl_pengembalian = null;
            $rent->user_id = $user->id;
            $rent->status = 'Di Pinjam';

            $due_to = Carbon::parse($rent->tgl_pinjam)->addDays(5)->toDateString();

            $rent->due_to = $due_to;
            $rent->save();

            $book->decrement('stok');


            return back()->with('rentsuccess', 'Berhasil Meminjam');
        } else {
            return back()->with('rentstock', 'Stok Habis');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Rent $rents)
    {
        $rents = Rent::all();
        return view('dashboard/petugas/datapinjam', [
            'rents' => $rents
        ]);
    }
    public function showuser(Rent $rents)
    {
        $user_id = Auth::id();

    // Ambil data peminjaman berdasarkan user_id
        $rents = Rent::where('user_id', $user_id)->orderBy('tgl_pinjam', 'desc')->get();

    // Kirim data ke view
        return view('dashboard/user/pinjamuser', ['rents' => $rents]);
    }
    public function riwayatshow(Rent $rents)
    {
        $rents = Rent::all();
        return view('dashboard/petugas/datariwayat', [
            'rents' => $rents
        ]);
    }
    public function riwayatuser()
    {
    $user_id = Auth::id();

    // Ambil data peminjaman berdasarkan user_id
    $rents = Rent::where('user_id', $user_id)->orderBy('tgl_pinjam', 'desc')->get();

    // Kirim data ke view
    return view('dashboard/user/riwayat', ['rents' => $rents]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rent $rent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function return($title)
    {
        $rent = Rent::where('book', $title)->whereNull('tgl_pengembalian')->first();

        $currentDate = new Carbon();

        if (!$rent) {
            return back()->with('error', 'Buku tidak ditemukan dalam daftar peminjaman atau sudah dikembalikan sebelumnya.');
        }

        $rent->update(['tgl_pengembalian' => now()]);

        if($currentDate > $rent->due_to) {
            $rent->update(['status' => 'Terlambat']);
            return back()->with('success', 'Buku berhasil dikembalikan.');
            
        }

        $rent->update(['status' => 'Di Kembalikan']);

        $book = Book::where('title', $title)->first();

        $book->increment('stok');

        return back()->with('kembali', 'Buku berhasil dikembalikan.');
    }
    public function ditolak($title)
    {
        $rent = Rent::where('book', $title)->whereNull('tgl_pengembalian')->first();

        $rent->update(['status' => 'Di Tolak']);
        
        $rent->update(['tgl_pengembalian' => now()]);

        $book = Book::where('title', $title)->first();

        $book->increment('stok');

        return back()->with('ditolak', 'Buku berhasil dikembalikan.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rent $rent)
    {
        //
    }
}
