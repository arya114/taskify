<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks'; // Nama tabel dalam database
    protected $fillable = ['title', 'description', 'is_completed']; // Kolom yang dapat diisi   
}
