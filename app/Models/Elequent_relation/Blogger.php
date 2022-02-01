<?php

namespace App\Models\Elequent_relation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogger extends Model
{
    use HasFactory;

    protected $tableName = 'bloggers';
    protected $primaryKey = 'blogger_id';

    public function post()
    {
        return $this->hasMany(Post::class, 'post_owner', 'blogger_id');
    }
}
