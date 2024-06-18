<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Title extends Model
{
    use HasFactory;
    use Translatable;
    protected $table = 'title';
    protected $translatable = ['title'];
}
