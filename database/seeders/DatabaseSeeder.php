<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Role;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            "name" => "Admin",
        ]);
        Role::create([
            "name" => "Petugas",
        ]);
        Role::create([
            "name" => "User",
        ]);
        
        User::create([
            "name" => "Fikri",
            "role_id" => 1,
            "id_kelas" => 1,
            "username" => "fikri",
            "slug" => Str::slug('fikri'),
            "password" => bcrypt('admin')
        ]);
        User::create([
            "name" => "Surya",
            "role_id" => 2,
            "id_kelas" => 2,
            "username" => "surya",
            "slug" => Str::slug('surya'),
            "password" => bcrypt('admin')
        ]);
       
        Category::create([
            "category_name" => "Novel"
        ]);
        Category::create([
            "category_name" => "Komik"
        ]);
        Category::create([
            "category_name" => "Cerpen"
        ]);
        
        Kelas::create([
            "name" => "RPL"
        ]);
        Kelas::create([
            "name" => "MM"
        ]);
        Kelas::create([
            "name" => "PFTV"
        ]);
    }
}
