<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * App\Category
 *
 * @mixin \Eloquent
 */
class Category extends Model
{
    use Sluggable;
    //
    public $timestamps = false;
    protected $fillable = [
        'content', 'slug', 'rel'
    ];
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public function subcategory(){
        return $this->hasMany('App\Category','rel','id');
    }

    public function products(){
        return $this->hasMany('App\Product','category_id','id');
    }

}
