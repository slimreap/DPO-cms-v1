<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Processes extends Model
{
    protected $primaryKey = 'id';
    use HasFactory;

    protected $fillable = ['name'];
    public function processable()
    {
        return $this->morphTo();
    }
}
