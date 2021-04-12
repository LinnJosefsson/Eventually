<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'guestbooks';


    public function events()
    {
        $this->belongsTo(Events::class);
    }
}
