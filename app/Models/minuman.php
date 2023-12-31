<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class minuman extends Model
{
    use HasFactory;
    public $table = "minuman";
    protected $primaryKey = "id";
    public $incrementing=false;
    protected $keyType= "string";
    protected $fillable = ['id', 'nama', 'harga', 'pilihan', 'jenis', 'created_at'];
}
