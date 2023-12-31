<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    public $table = "karyawan";
    protected $primaryKey = "id";
    public $incrementing=false;
    protected $keyType= "string";
    protected $fillable = ['id', 'nama', 'alamat', 'telepon', 'email', 'created_at'];
}
