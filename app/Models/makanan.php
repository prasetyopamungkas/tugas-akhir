<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    use HasFactory;
    public $table = "makanan";
    protected $primaryKey = "id";
    public $incrementing=false;
    protected $keyType= "string";
    protected $fillable = ['id', 'nama', 'harga', 'jenis', 'tingkat_kepedasan', 'created_at'];
}
