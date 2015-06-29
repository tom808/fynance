<?php namespace App;

/**
 * Created by: tom
 * DateTime: 16/06/15 06:14
 */

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model {

    protected $fillable = ['type','name','value','date'];

    public function account() {

        return $this->hasOne('app\Account');

    }

} 