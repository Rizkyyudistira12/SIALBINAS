<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';
    protected  $fillable = ['nama','gender','tmpt_lahir','tgl_lahir','no_tlp','pekerjaan','alamat','avatar','user_id'];

    public function getAvatar()
    {
        // if avatar null
        if(!$this->avatar){
            return asset('images/default.png');
        }
        // if avatar available
        return asset('images/'.$this->avatar);
    }
}

