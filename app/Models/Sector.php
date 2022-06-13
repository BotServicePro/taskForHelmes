<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    public $fillable = ['name', 'parentId'];

    public function childs() {
        return $this->hasMany('App\Models\Sector','parentId','id') ;
    }
}
