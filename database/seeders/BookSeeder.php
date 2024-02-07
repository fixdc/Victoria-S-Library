<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            "title" => "Cuak cuak",
            "category_id" => 1,
            "image" => "",
            "body" => "lorem lorem lorem"
        ]);
        Book::create([
            "title" => "Fikri",
            "category_id" => 2,
            "image" => "",
            "body" => "lorem lorem lorem"
        ]);
        Book::create([
            "title" => "SURYA",
            "category_id" => 1,
            "image" => "",
            "body" => "lorem lorem lorem"
        ]);
        Book::create([
            "title" => "asdasdas",
            "category_id" => 2,
            "image" => "",
            "body" => "lorem lorem lorem"
        ]);
        Book::create([
            "title" => "Cuak cuak",
            "category_id" => 2,
            "image" => "",
            "body" => "lorem lorem lorem"
        ]);
        Book::create([
            "title" => "Cuak cuak",
            "category_id" => 3,
            "image" => "",
            "body" => "lorem lorem lorem"
        ]);
    }
}
