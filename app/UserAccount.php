<?php
/**
 * Created by: tom
 * Date: 15/06/15
**/

use Illuminate\Database\Eloquent\Model;

class UserAccount extends Model {

    protected $fillable = ['user_id','account_id'];

    public function users() {

        return $this->hasMany('App\UserAccount');
    }

} 