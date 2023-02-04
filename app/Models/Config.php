<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;
    protected $table = 'configs';
    protected $fillable = array(
        'phone',
        'ip'
    );

    protected $hidden = ['updated_at'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

}
