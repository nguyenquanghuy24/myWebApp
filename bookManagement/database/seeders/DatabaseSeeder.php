<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
use App\Models\Book;   
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'test@example.com'], 
            [
                'name' => 'Test User',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
                'remember_token' => Str::random(10),
            ]
        );

        Book::create([
            'bookName' => 'Avance Web',
            'bookCode' => 'AW12398',
            'bookAuthor' => 'Laravel',
            'publishYear' => 2024,
            'ISBN' => '123-456-789',
            'category' => 'Programming',
            'description' => 'Sách test cho project',
        ]);
    }
}
