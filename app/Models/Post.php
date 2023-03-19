<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected  $table = 'posts1';

    public function rubric()
    {
        return $this->belongsTo(Rubric::class,'rubric_id');
    }

    public function tags()
    {

        return $this->belongsToMany(Tag::class,'posts_tags','posts_id','tag_id');
    }

    //protected $primaryKey = 'post_id';
    //public $incrementing = false;
  //  protected $keyType = 'string';
  //  public $timestamps = false;
//    protected $attributes = [
//      'content' => 'Lorem ipsum...',
//    ];
        public function getPostDate()
        {
            $formatter = new \IntlDateFormatter('ru_RU',\IntlDateFormatter::FULL,
            \IntlDateFormatter::FULL);
            $formatter ->setPattern('d MMM y');
            return $formatter->format(new \DateTime($this->created_at));
//            return Carbon::parse($this->created_at)->diffForHumans();
        }
        protected $fillable=['title','content','rubric_id'];
}
