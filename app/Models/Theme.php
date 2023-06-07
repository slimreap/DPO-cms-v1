<?php

namespace App\Models;

use App\Models\Page;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Theme extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id','name', 'path_of_content', 'screenshot_path'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    public function processes()
    {
        return $this->morphOne(Processes::class, 'processable');
    }
}
