<?php

namespace App\Models\Elequent_relation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $tableName = 'posts';
    protected $primaryKey = 'post_id';
}
