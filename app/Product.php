<?php

namespace App;

use stdClass;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @mixin \Eloquent
 */
class Product extends Model
{
    //
    protected $fillable = ["title","content","price","tag","category_id"];
    protected $appends = ["fimg"];

    public function images(){
        return $this->morphMany('App\Image','imageable');
    }

    public function getfimgAttribute(){
        $image = new stdClass();
        $image->id = $this->images()->where('is_first',1)->first()->id;
        $image->url = $this->images()->where('is_first',1)->first()->url;
        return $image;
    }

    public function category(){
       return $this->belongsTo('App\Category','category_id','id');
    }
}
