<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class Contacts extends Model
{
    use HasFactory;
    use Translatable;
    protected $table = 'contacts';
    protected $translatable = ['address'];
}
