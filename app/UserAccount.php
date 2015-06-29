<?php namespace App;
/**
 * Created by: tom
 * Date: 15/06/15
**/

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model {

    protected $fillable = ['user_id','account_id'];

    public function user() {

        return $this->hasOne('app\User');
    }

    public function account() {

        return $this->hasOne('app\Account');
    }

} 