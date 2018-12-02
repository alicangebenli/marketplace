<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Bank
 *
 * @mixin \Eloquent
 */
class Bank extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
      'name','iban','account_name','account_number'
    ];
}
