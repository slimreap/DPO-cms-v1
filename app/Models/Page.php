<?php

namespace App\Models;

use App\Models\Theme;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = ['theme_id', 'page_name', 'path_of_content' ,'slug'];
    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function processes()
    {
        return $this->morphOne(Processes::class, 'processable');
    }

}
