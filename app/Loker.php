<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loker extends Model
{
    protected $table = 'loker';
    protected $fillable = ['perusahaan','avatar','posisi_loker','pendidikan','jobdesk','alamat','gaji'];

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
