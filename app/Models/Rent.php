<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{   
    public function user()
    {
    return $this->belongsTo(User::class, 'user_id'); // 'user_id' adalah kunci asing dalam tabel 'rents'
    }
    public function book(){
        return $this->belongsTo(User::class,'id');
    }
    use HasFactory;

    protected $guarded = [
        'id'
    ];
}



