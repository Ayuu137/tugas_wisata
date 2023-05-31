<?php

namespace App\Models;

use App\Models\Tempatwisata;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','nama_list'
    ];
    // protected $primaryKey = 'user_id';
    public function tempatwisata()
    {
        return $this->belongsToMany(Tempatwisata::class,'tempatwisata_id','nama_list_tempatwisata');
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
