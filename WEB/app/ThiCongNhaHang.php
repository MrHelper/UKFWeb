<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThiCongNhaHang extends Model
{
    protected $table = 'thicongnhahang';

    protected $fillable = [
    	'title',
    	'description',
    	'image',
    	'content'
    ];
}
