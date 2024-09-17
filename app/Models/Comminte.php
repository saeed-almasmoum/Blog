<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Comminte extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'blog_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function blog(){
        return $this->belongsTo(blog::class);
    }
}
