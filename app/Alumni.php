<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';
    protected  $fillable = ['nama','gender','tmpt_lahir','tgl_lahir','no_tlp','pekerjaan','alamat','avatar','testimoni','user_id'];

    public function getAvatar()
    {
        // if avatar null
        if(!$this->avatar){
            return asset('images/default.png');
        }
        // if avatar available
        return asset('images/'.$this->avatar);
    }

    public function nama()
    {
        return $this->belongsTo(Alumni::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault(['avatar' => 'default.jpg']);
    }


}

