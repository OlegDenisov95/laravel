<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class Rubric extends Model
{
    use HasFactory;
    //$rubric = Rubric::fing(1);
    //$rubric -> post
    public function post()
    {
        return $this->hasMany(Post::class,'rubric_id');
    }
}
