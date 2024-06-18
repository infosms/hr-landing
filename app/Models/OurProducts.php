<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class OurProducts extends Model
{
    use HasFactory;
    use Translatable;
    protected $table = 'our_products';
    protected $translatable = ['title', 'text'];
}
