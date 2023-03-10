<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = array(
        'title',
        'text',
        'state'
    );

    protected $hidden = ['updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function config()
    {
        return $this->hasOne(Config::class);
    }
}
