<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            ['title' => 'Buat konsep aplikasi', 'description' => 'Tentukan konsep aplikasi sederhana', 'is_completed' => false],
            ['title' => 'Implementasi Migration & Seeder', 'description' => 'Implementasikan konsep dalam Laravel', 'is_completed' => false],
            // Tambahkan data tugas lainnya di sini
        ]);
    }
}
