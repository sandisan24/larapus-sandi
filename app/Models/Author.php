<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // memberikan akses data apa saja yang bisa di lihat
    protected $visible = ['name'];
    // memberikan akses data apa saja yang bisa di isi
    protected $fillable = ['name'];
    // mencatat waktu pembuatan dan update data otomatis
    public $timestamps = true;
}
