<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class State extends Model
{
    use HasFactory ,HasTranslations;

    protected $table = 'states';
    public $translatable = ['name'];
    protected $fillable =['name'];
}
