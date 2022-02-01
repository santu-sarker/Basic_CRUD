<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElequentUser extends Model
{
    use HasFactory;
    protected $table = 'elequentcars';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'ref_id',
        'updated_at',
    ];
    protected $hidden = ['created_at'];

    public function getRouteKeyName()
    {
        return 'id';
    }
}
