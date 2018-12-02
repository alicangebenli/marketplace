<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Page
 *
 * @mixin \Eloquent
 */
class Page extends Model
{
    use Sluggable;
    //
    public $timestamps = false;
    protected $fillable = ['title','content','slug','image'];
    public function image(){
        return $this->morphOne('App\Image','imageable');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
