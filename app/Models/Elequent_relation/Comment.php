<?php

namespace App\Models\Elequent_relation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $tableName = 'comments';
    protected $primaryKey = 'comment_id';
}
