<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Attributes extends Model
{
    protected $table = 'attributes';
    protected $primaryKey = 'id';

    public function goods() {
        return $this->belongsTo('App\Model\Goods', 'goods_id');
    }
}
