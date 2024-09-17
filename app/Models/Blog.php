<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Blog extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'body',
        'user_id',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function commintes()
    {
        return $this->hasMany(Comminte::class);
    }

    public function user()
    {
        return  $this->belongsTo(User::class); 
    }

}
