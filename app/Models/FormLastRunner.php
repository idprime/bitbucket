<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormLastRunner extends Model
{
    use HasFactory;
    protected $fillable = ['runner_id','track','date','distance'];
}