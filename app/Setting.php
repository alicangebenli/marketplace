<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Setting
 *
 * @mixin \Eloquent
 */
class Setting extends Model
{
    //
    public $timestamps = false;
    public $fillable = ['value'];
}
