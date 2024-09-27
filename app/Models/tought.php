<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Run the migrations.
 *varchar 240 char
 *likes integer 0
 *dislikes integer 0
 *views integer 0
 *created_at timestamp
 *updated_at timestamp
 */
class tought extends Model
{

    use HasFactory;

    // Explicitly define the table name
    protected $table = 'tought';

    //telling laravel what column are assignable
    protected $fillable = [
        'content',
        'likes'

    ];
}
