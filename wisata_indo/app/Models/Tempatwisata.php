<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tempatwisata extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_tempat','deskrisi','alamat'
    ];
    public function wishlist()
    {
        return $this->belongsTo(Tempatwisata::class);
    }
}
