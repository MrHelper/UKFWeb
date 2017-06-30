<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThietKeNoiThat extends Model
{
    protected $table = 'thietkenoithat';

    protected $fillable = [
    	'title',
    	'description',
    	'image',
    	'content'
    ];
}
