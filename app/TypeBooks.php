<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeBooks extends Model
{
    protected $table = 'typebooks'; //กําหนดชือตารางให้ตรงกบัฐานข้อมลู

    public function books(){
        return $this->hasMany(Books::class); //กําหนดความสมัพนัธ์รูปแบบ One To Many ไปยงัตาราง books
    }

}
