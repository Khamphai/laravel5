<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books'; //กําหนดชือตารางในฐานข้อมลู
    protected $fillable = ['title','price','typebooks_id'];//กําหนดให้สามารถเพิมข้อมลูได้ในคําสงั เดียว Mass Assignment

    public function typebooks(){
        return $this->belongsTo(TypeBooks::class, 'typebooks_id');
    }

}
