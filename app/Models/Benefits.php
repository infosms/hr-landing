<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Benefits extends Model
{
    use HasFactory;
    use Translatable;
    protected $table = 'benefits';
    protected $translatable = ['title', 'text_front', 'text_bac'];
}
