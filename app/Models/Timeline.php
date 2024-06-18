<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Timeline extends Model
{
    use HasFactory;
    use Translatable;
    protected $table = 'timeline';
    protected $translatable = ['title', 'text'];
}
