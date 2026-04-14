<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'public.pengguna';
    protected $primaryKey = 'id_pengguna';

    protected $fillable = ['email', 'password'];

    public $timestamps = true;

    public $incrementing = true;   // TAMBAHAN
}
