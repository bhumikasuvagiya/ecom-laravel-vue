<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'user_type';

    protected $primaryKey = 'user_type_id ';

    protected $fillable = [
        'user_type_name'
    ];
}
