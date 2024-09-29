<?php

namespace Nayem1108\DocumentManagement\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'file_path'];

    // Additional relationships or methods can go here
}