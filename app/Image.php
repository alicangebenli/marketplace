<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Image
 *
 * @mixin \Eloquent
 */
class Image extends Model
{
    //
    public $fillable = ['url','imageable_type','imageable_id','is_first'];
    public $timestamps = false;


}
