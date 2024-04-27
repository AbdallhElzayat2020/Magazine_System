<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['id', 'image', 'category_id', 'created_at', 'updated_at', 'deleted_at'];
}
