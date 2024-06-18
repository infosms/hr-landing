<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Problems extends Model
{
    use HasFactory;
    use Translatable;
    protected $table = 'problems';
    protected $translatable = ['problems', 'decisions'];
}
