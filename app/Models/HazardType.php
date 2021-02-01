<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HazardType extends Model
{
    use HasFactory;
    
    public $id, $name;
}
