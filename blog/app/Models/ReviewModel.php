<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
    public $table = 'review';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $typeKey = 'int';
    public $timestamps = false;
}
