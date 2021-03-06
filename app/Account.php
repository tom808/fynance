<?php namespace App;
/**
 * Created by: tom
 * Date: 15/06/15
 * Time: 07:10
 * */

use Illuminate\Database\Eloquent\Model;


class Account extends Model {

    protected $fillable = ['name', 'balance'];

    public function user() {

        return $this->hasOne('app\User');
    }

} 